<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuralController extends Controller
{
    public function index()
    {
        return view('site.pagina1');
    }

    public function create()
    {
        return view('site.pagina2');
    }

    public function read()
    {
        return view('site.pagina3');
    }

    public function update()
    {
        return view('site.pagina4');
    }

    public function delete()
    {
        return view('site.pagina5');
    }
}
