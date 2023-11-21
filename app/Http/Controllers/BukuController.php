<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function view($idbuku)
    {
        echo 'ID : ' . $idbuku;
    }
}
