<?php

namespace App\Http\Controllers\New;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalenderController extends Controller
{
    public function index()
    {
        return view('newonboarding.bookacall');
    }
}
