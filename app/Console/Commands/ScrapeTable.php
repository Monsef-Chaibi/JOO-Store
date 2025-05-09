<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;

class ScrapeTable extends Command
{
    protected $signature = 'scrape:table';
    protected $description = 'Scrape football club ranking table from a website';

    public function handle()
    {
        $url = 'https://howatpress.net/?anwp_competition=lnfa-nord-est-2-2024-2025';
        $html = file_get_contents($url);

        if ($html === false) {
            $this->error("Failed to retrieve the HTML from the website.");
            return Command::FAILURE;
        }

        // Save the HTML content to a file
        $filePath = storage_path('app/latest_page.html');
        file_put_contents($filePath, $html);

        $this->info("HTML saved to: $filePath");

        $this->info("Reading saved HTML...");

        // Load the saved HTML
        $html = file_get_contents(storage_path('app/latest_page.html'));

        libxml_use_internal_errors(true);
        $dom = new \DOMDocument();
        $dom->loadHTML($html);
        libxml_clear_errors();

        $xpath = new \DOMXPath($dom);

        // Extract the club names and other data
        $clubs = [];

        // Get club names and stats
        $clubNames   = $xpath->query('//a[contains(@class, "club__link")]');
        $playedNodes = $xpath->query('//div[contains(@class, "standing-table__played")]');
        $wonNodes    = $xpath->query('//div[contains(@class, "standing-table__won")]');
        $drawnNodes  = $xpath->query('//div[contains(@class, "standing-table__drawn")]');
        $lostNodes   = $xpath->query('//div[contains(@class, "standing-table__lost")]');
        $pointsNodes = $xpath->query('//div[contains(@class, "standing-table__points")]');

        $count = $playedNodes->length;

        // Loop through the cl ubs and gather their data
        for ($i = 0; $i < $count; $i++) {
            // Get the text content of each club data point, if available
            $clubName = trim($clubNames->item($i)->textContent ?? '');

            // Skip clubs with invalid or missing data (e.g., "N/A" or empty values)
            if (empty($clubName) || strpos($clubName, 'N/A') !== false) {
                continue; // Skip invalid clubs like "N/A"
            }

            $clubs[] = [
                'club_name' => $clubName,
                'played'    => trim($playedNodes->item($i)->textContent ?? ''),
                'won'       => trim($wonNodes->item($i)->textContent ?? ''),
                'drawn'     => trim($drawnNodes->item($i)->textContent ?? ''),
                'lost'      => trim($lostNodes->item($i)->textContent ?? ''),
                'points'    => trim($pointsNodes->item($i)->textContent ?? ''),
            ];
        }

        // Print the clubs data
        foreach ($clubs as $index => $club) {
            $this->info("Club #".($index + 1)." - ".$club['club_name']);
            $this->line("Played: {$club['played']}, Won: {$club['won']}, Drawn: {$club['drawn']}, Lost: {$club['lost']}, Points: {$club['points']}");
        }

        return Command::SUCCESS;
    }

}
