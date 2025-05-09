<?php

namespace App\Http\Controllers;

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
}
