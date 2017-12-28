<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modell;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;


class DkmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $dkms = Dkm::select(['id','tujuan']);
            return Datatables::of($dkms)
            ->addColumn('action', function($dkm){
                return view('datatable._action', [
                    'model'=> $dkm,
                    'form_url'=> route('dkms.destroy', $dkm->id),
                    'edit_url' => route('dkms.edit', $dkm->id),
                    'confirm_message' => 'Yakin mau menghapus ' . $dkm->tujuan . '?'
                    ]);
            })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'tujuan', 'name'=>'tujuan', 'title'=>'Tujuan'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 
            'searchable'=>false]);
        // return $html;
        // dd($html);
        return view('dkms.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dkm.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['tujuan' => 'required|unique:dkms']);
        $dkm = Modell::create($request->all());
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $dkm->tujuan"
            ]);
        return redirect()->route('dkms.index');
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
        $dkm = Dkm::find($id);
        return view('dkms.edit')->with(compact('dkm'));
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
        $this->validate($request, ['tujuan' => 'required|unique:dkms,tujuan,'. $id]);
        $dkm = Dkm::find($id);
        $dkm->update($request->only('tujuan'));
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $dkm->tujuan"
            ]);
        return redirect()->route('dkms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Dkm::destroy($id)) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Model berhasil dihapus"
            ]);
        return redirect()->route('dkms.index');
    }
}
