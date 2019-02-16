<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Website;
use App\Models\Banner;
use App\Models\Noticias;
use App\Models\Publicacoes;
use App\Models\Eventos;
use App\Http\Requests;

class WebsiteController extends Controller
{
    //protected $showPageBanner = true;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $banners = Banner::active()->where('is_website', 1)->orderBy('created_at', 'desc')->get();

        $noticias = Noticias::orderBy('id', 'desc')->paginate(3);
        $publicacoes = Publicacoes::orderBy('id', 'desc')->paginate(4);
        $eventos = Eventos::orderBy('id', 'desc')->paginate(2);

        return view('welcome', compact('banners', 'noticias', 'publicacoes', 'eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
