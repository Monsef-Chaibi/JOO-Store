<?php

namespace App\Http\Controllers;
use Flasher\Prime\Flasher;
use Flasher\Prime\Factory\FlasherFactory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Product_Page()
    {
        return view("Page.product");
    }

    public function Mode_Page()
    {
        return view("Page.product");
    }
    public function Product_Details_Page()
    {
        return view("Page.productdetails");
    }

    public function Flasher(Flasher $flasher)
    {

        flash()->success('Product created successfully!');
        return response()->json(['message' => 'This is an alert message']);

    }
}
