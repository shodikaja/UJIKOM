<?php

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Modell;
use App\Galeri;
use App\Mobil;
use App\Leader;
use App\Poto;
use App\Perusahaan;
use App\Mesin;
use App\Dimensi;
use App\Transmisi;
use App\Skemudi;
use App\Ssuspensi;
use App\Srem;
use App\Ban;
use App\Eksterior;
use App\Interior;
use App\Fkeselamatan;
use App\Skeamanan;
use App\sejarah;
use App\quotes;
use App\background_quotes;
use App\Header;
use App\Product;
use Laratrust\LaratrustFacade as Laratrust;
use Illuminate\Support\Str;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
