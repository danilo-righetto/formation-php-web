<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use App\Http\Requests\SeriesFormRequest;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
  public function index(Request $request)
  {
    // $series = [
    //     'Punisher',
    //     'Lost',
    //     'Sabrina'
    // ];

    // $series = DB::select('SELECT nome FROM series;');
    $series = Serie::query()->orderBy('nome')->get();
    $mensagemSucesso = $request->session()->get('mensagem.sucesso');
    return view('series.index')->with('series', $series)->with('mensagemSucesso', $mensagemSucesso);
  }

  public function create()
  {
    return view('series.create');
  }

  public function store(SeriesFormRequest $request)
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
    $serie = Serie::create($request->all());

    /* Para trazer todos os dados de uma requisição com exceção de um ou mais
    campos utilize:
    $request->except(['_token']);
    */

    return to_route('series.index')->with('mensagem.sucesso', "Série '{$serie->nome}' adicionada com sucesso");
  }

  public function destroy(Serie $series, Request $request)
  {
    $series->delete();
    // Serie::destroy($request->series);
    return to_route('series.index')->with('mensagem.sucesso', "Série '{$series->nome}' removida com sucesso");
  }

  public function edit(Serie $series)
  {
    return view('series.edit')->with('series', $series);
  }

  public function update(Serie $series, SeriesFormRequest $request)
  {
    $series->nome = $request->nome;
    $series->save();

    /* Caso seja interessante utilizar o 'mass assignment' do Laravel o código abaixo será util */
    // $series->fill($request->all());

    return to_route('series.index')->with('mensagem.sucesso', "Série '{$series->nome}' editada com sucesso");
  }
}
