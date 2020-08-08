<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function __invoke($value='')
    {
    
    return view('adminlte.table.table');
    }
}
