<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() 
    {
        return view('index');    
    
    }

    public function about() 
    {
        return view('about');    
    }

    public function shop() 
    {
        return view('shop');    
    }

    public function competitions() 
    {
        return view('competitions');    
    }

    public function cart() 
    {
        return view('cart');    
    }

    public function checkout() 
    {
        return view('checkout');    
    }

    public function feedback() 
    {
        return view('feedback');    
    }

    public function contact() 
    {
        return view('contact');    
    }
}
