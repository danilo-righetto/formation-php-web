<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index()
    {
        $series = [
            'Punisher',
            'Lost',
            'Sabrina'
        ];

        $series = DB::select('SELECT nome FROM series;');

        $html = '<ul>';
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }
        $html .= '</ul>';

        echo $html;
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nomeSerie = $request->input('nome');

        /* Modo errado de realizar essa inserção */
        if(DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie])) {
            return "OK";
        } else {
            return "Deu erro";
        }
    }
}
