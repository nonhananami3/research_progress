<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theme;

class ThemeController extends Controller
{
    public function index(Theme $theme)
    {
        return view('themes/index')->with(['themes'=>$theme->get()]);
    }
    
    public function show(Theme $theme)
    {
        return view('themes/show')->with(['themes'=>$theme->get()]);
    }
}
