<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\sejarah;
use Session;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreBookRequest;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        $sejarahs = sejarah::all();

     if ($request->ajax()) {
        $sejarahs = sejarah::select(['id','text','background']);
        return Datatables::of($sejarahs)
        ->addColumn('background', function($sejarahs){
            return '<img src="/img/img4/'.$sejarahs->background. '" height="100px" width="200px">';
        })
               ->addColumn('action', function($sejarahs){
            return view('datatable._action', [
                'model'=> $sejarahs,
                'edit_url'=> route('sejarah.edit', $sejarahs->id)
                ]);
        })->make(true);
    }
 
    $html = $htmlBuilder
    ->addColumn(['data' => 'text', 'name'=>'text', 'title'=>'Sejarah'])
    ->addColumn(['data' => 'background', 'name'=>'background', 'title'=>'Background'])
    ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>false]);
    return view('sejarah.index')->with(compact('sejarahs','html'));
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
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $sejarahs = sejarah::find($id);
        return view('sejarah.edit')->with(compact('sejarahs'));
    
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
        $this->validate($request, ['text' => 'required|unique:sejarahs,text,'. $id,
            'background'=> 'image|max:2048'
            ]);
        $poto = sejarah::find($id);
        $poto->update($request->all());
        if ($request->hasFile('background')) {
// menambil cover yang diupload berikut ekstensinya
            $filename = null;
            $uploaded_background = $request->file('background');
// mengambil extension file
            $extension = $uploaded_background->getClientOriginalExtension();
// membuat nama file random dengan extension
            $filename = md5(time()) . '.' . $extension;
// menyimpan cover ke folder public/img
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img/img4';
// memindahkan file ke folder public/img
            $uploaded_background->move($destinationPath, $filename);
// hapus cover lama, jika ada
            if ($poto->background) {
                $old_cover = $poto->background;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'img/img4'
                . DIRECTORY_SEPARATOR . $poto->background;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
// File sudah dihapus/tidak ada
                }
            }

            // ganti field cover dengan cover yang baru
            $poto->background = $filename;
            $poto->save();
        }
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan Data"
            ]);
        return redirect()->route('sejarah.index');
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
            