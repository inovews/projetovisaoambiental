<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\PortalAlunoProf;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunoprofs = PortalAlunoProf::orderBy('data_aula', 'desc')->paginate(15);

        //return view('portal.home', compact('alunoprofs'));
        return view('portal.home', ['alunoprofs'=>$alunoprofs]);
    }
}
