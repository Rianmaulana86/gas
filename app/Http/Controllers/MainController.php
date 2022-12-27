<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view("page/home", 

            [
                "category" => Category::all()
            ]
        );
    }
}
