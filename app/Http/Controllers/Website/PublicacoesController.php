<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Publicacoes;
use App\Http\Requests;

class PublicacoesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $publicacoes = Publicacoes::latest()->paginate(10);

        return view('website.publicacoes.index', compact('publicacoes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publicacao = Publicacoes::findOrFail($id);

        return view('website.publicacoes.show', compact('publicacao'));
    }
}
