<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuralController extends Controller
{
    public function create()
    {
        return view('site.pagina1');
    }

    public function read()
    {
        return view('site.pagina2');
    }

    public function update()
    {
        return 'Atualizando';
    }

    public function delete()
    {
        return 'Deletando';
    }
}
