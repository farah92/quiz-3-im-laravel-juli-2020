<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProyekController extends Controller
{
    public function index(){
        $proyek = DB::table('proyek')->get();
        return view('layouts/proyek',compact('proyek'));
        // return view('layouts/proyek');
    }

    public function create()
    {
        return view('layouts/add');
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'judul' => 'required',
        //     'isi' => 'required'
        // ]);

        DB::table('proyek')->insert(
            [
                'nama_proyek' => $request->nama_proyek,
                'deskripsi_proyek' => $request->deskripsi_proyek,
                'tanggal_mulai' => $request->tanggal_mulai,
                'tanggal_deadline' => $request->tanggal_deadline,
                'status' => $request->status,
            ]
        );

        return redirect('proyek')->with('status', 'proyek added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $proyek = DB::table('proyek')->where('proyek_id', '=', $id)->first();
        return view('layouts/proyek/detail-proyek', compact('proyek'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyek = DB::table('proyek')->where('proyek_id', '=', $id)->first();
        return view('layouts/proyek/update-proyek', compact('proyek'));
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
        // $validatedData = $request->validate([
        //     'judul' => 'required',
        //     'isi' => 'required'
        // ]);

        DB::table('proyek')->where('proyek_id', $id)->update(
            [
                'nama_proyek' => $request->nama_proyek,
                'deskripsi_proyek' => $request->deskripsi_proyek,
                'tanggal_mulai' => $request->tanggal_mulai,
                'tanggal_deadline' => $request->tanggal_deadline,
                'status' => $request->status,
            ]
        );

        return redirect('proyek')->with('status', 'proyek updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('proyek')->where('proyek_id', $id)->delete();
        return redirect('proyek')->with('status', 'proyek deleted successfully!');
    }
}

    

