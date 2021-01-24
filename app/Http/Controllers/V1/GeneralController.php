<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function pricing()
    {
        return view('backend.pages.pricing');
    }
    public function support()
    {
        return view('backend.pages.technical-support');
    }
    public function about()
    {
        return view('backend.pages.about-exprsol');
    }
}
