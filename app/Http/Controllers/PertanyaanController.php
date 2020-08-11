<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\pertanyaan;

class PertanyaanController extends Controller
{
    //public 
    function index($value='')
    {
    	// $list = DB::table('pertanyaan')->get();
        $list = pertanyaan::all();
        return view('pertanyaan.pertanyaan', ['list' => $list]);
    }

    function show($id=0)
    {
        // $list = DB::table('pertanyaan')->where('id',$id)
        // ->get();
        $list = pertanyaan::where('id', $id)
               // ->orderBy('name', 'desc')
               // ->take(10)
               ->get();
        // $flight = Flight::firstWhere('active', 1);
        return view('pertanyaan.pertanyaanId', ['list' => $list]);
    }

    function edit($id=0)
    {
        // $post = DB::table('pertanyaan')->where('id',$id)
        // ->first();
        $post = pertanyaan::find($id);
        return view('pertanyaan.pertanyaanEdit', compact('post'));
    }

    function create()
    {
        return view('pertanyaan.form_pertanyaan');
    }

    function store(Request $request)
    {
    	$validatedData = $request->validate([
	        'judul' => 'required|unique:pertanyaan',
	        'isi' => 'required',
    	]);

		// DB::table('pertanyaan')->insert(
		//     [
		//     	'judul' => $request->judul, 
		//     	'isi' => $request->isi,
		//     	'profil_id' => 1,
		//     	'jawaban_tepat_id' => 1,
		//     ]
		// );

        // $pertanyaan = new pertanyaan;
        // $pertanyaan->judul = $request->judul;
        // $pertanyaan->isi = $request->isi;
        // $pertanyaan->profil_id = 1;

        // $pertanyaan->save();
		
        $pertanyaan = pertanyaan::create([
             'judul' => $request->judul, 
             'isi' => $request->isi,
             'profil_id' => 1,
            ]);

    	return redirect('pertanyaan')->with("success",'data berhasil disimpan');
    }

    function update($id,Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required',
        ]);

        // DB::table('pertanyaan')
        // ->where('id', $id)
        // ->update(
        //     [
        //         'judul' => $request->judul, 
        //         'isi' => $request->isi,
        //     ]
        // );

        pertanyaan::where('id', $id)
        ->update(
            [
                'judul' => $request->judul, 
                'isi' => $request->isi,
            ]
        );
        
        return redirect('pertanyaan')->with("success",'data berhasil disimpan');
    }

    function destroy($id)
    {
        // DB::table('pertanyaan')
        // ->where('id', $id)
        // ->delete();

        pertanyaan::destroy($id);        
        return redirect('pertanyaan')->with("success",'data berhasil dihapus');
    }




}
