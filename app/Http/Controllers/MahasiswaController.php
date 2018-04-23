<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::orderBy('first_name')->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'min:20|required',
            'last_name' => 'min:20',
            'email' => 'email|unique:kampus,email|required',
            'password' => 'required',
            'jenis_kelamin' => 'required',
            'password' => 'min:8|required',
            'tgl_lahir' => 'date_format:"Y-m-d"|required',
            'agama_id' => 'integer|required'
        ]);

        Mahasiswa::create($request->all());
        return redirect('mahasiswa')->with('mahasiswa', 'Data has been successfully stored');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
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
        $request->validate([
            'first_name' => 'min:20|required',
            'last_name' => 'min:20',
            'email' => 'required|email|unique:kampus,email,'.$id,
            'password' => 'required',
            'jenis_kelamin' => 'required',
            'password' => 'min:8|required',
            'tgl_lahir' => 'date_format:"Y-m-d"|required',
            'agama_id' => 'integer|required'
        ]);

        Mahasiswa::find($id)->update($request->all());

        return redirect('mahasiswa')->with('mahasiswa', 'Data has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mahasiswa::find($id)->delete();
        return redirect('mahasiswa')->with('mahasiswa', 'Data has been successfully deleted my babyyy :)');
    }
}
