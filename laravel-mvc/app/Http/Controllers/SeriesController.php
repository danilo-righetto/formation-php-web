<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
  public function index()
  {
    // $series = [
    //     'Punisher',
    //     'Lost',
    //     'Sabrina'
    // ];

    // $series = DB::select('SELECT nome FROM series;');
    $series = Serie::query()->orderBy('nome')->get();

    return view('series.index')->with('series', $series);
  }

  public function create()
  {
    return view('series.create');
  }

  public function store(Request $request)
  {
    // $nomeSerie = $request->input('nome');

    /* Outra forma de obter a informação do campo 'nome' da requisição é essa: */
    // $nomeSerie = $request->nome;

    /* Modo errado de realizar essa inserção */
    // DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie]);
    // return redirect('/series');

    /* Modo correto de realizar essa inserção */
    // $serie = new Serie();
    // $serie->nome = $nomeSerie;
    // $serie->save();

    /* Outra forma de registrar uma Serie no banco e mais enxuta é essa */
    Serie::create($request->all());

    /* Para trazer todos os dados de uma requisição com exceção de um ou mais
    campos utilize:
    $request->except(['_token']);
    */

    return to_route('series.index');
  }
}
