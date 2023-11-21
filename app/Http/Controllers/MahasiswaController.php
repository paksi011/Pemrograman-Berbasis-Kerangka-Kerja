<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function view($npm)
    {
        echo 'NPM : ' . $npm;
    }
}
