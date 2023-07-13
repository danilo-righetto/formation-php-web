<?php

namespace App\Http\Controllers;

use App\Models\Series;
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
    $series = Series::all();
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
    // $serie = new Series();
    // $serie->nome = $nomeSerie;
    // $serie->save();

    /* Outra forma de registrar uma Series no banco e mais enxuta é essa */
    $serie = Series::create($request->all());
    for ($i = 1; $i <= $request->seasonsQty; $i++) {
      $season = $serie->seasons()->create([
        'number' => $i
      ]);

      for ($j = 1; $j <= $request->episodesPerSeason; $j++) {
        $season->episodes()->create([
          'number' => $j
        ]);
      }
    }

    /* Para trazer todos os dados de uma requisição com exceção de um ou mais
    campos utilize:
    $request->except(['_token']);
    */

    return to_route('series.index')->with('mensagem.sucesso', "Série '{$serie->nome}' adicionada com sucesso");
  }

  public function destroy(Series $series, Request $request)
  {
    $series->delete();
    // Series::destroy($request->series);
    return to_route('series.index')->with('mensagem.sucesso', "Série '{$series->nome}' removida com sucesso");
  }

  public function edit(Series $series)
  {
    return view('series.edit')->with('series', $series);
  }

  public function update(Series $series, SeriesFormRequest $request)
  {
    $series->nome = $request->nome;
    $series->save();

    /* Caso seja interessante utilizar o 'mass assignment' do Laravel o código abaixo será util */
    // $series->fill($request->all());

    return to_route('series.index')->with('mensagem.sucesso', "Série '{$series->nome}' editada com sucesso");
  }
}
