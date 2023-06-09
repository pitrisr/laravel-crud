<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Matkul;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen = Dosen::all();
        return view('admin.dosen.index', ['dosen' => $dosen]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'educationlevel' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);

        Dosen::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'address' => $request->address,
            'edducationlevel' => $request->educationlevel,
            'phone' => $request->nphoneame,
            'email' => $request->email
        ]);
        return redirect('/dosen');

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
        $dosen = Dosen::find($id);
        return view('admin.dosen.edit', ['dosen' => $dosen]);
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
        $this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'educationlevel' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);
        $dosen = Dosen::find($id);
        $dosen->update($request->all());

        return redirect('/dosen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *  @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dosen = Dosen::find($id);
        $dosen->delete();

        return redirect()->back();
    }

    public function search(Request $request)
    {
        if ($request->has('search')) {
            $dosen = Dosen::where('name', 'LIKE', '%' . $request->search . '%')->get();

        } else {
            $dosen = Dosen::all();
        }

        return view('admin.dosen.index', ['dosen' => $dosen]);
    }

    public function matkul()
    {
        $matkul = Matkul::all();
        return view('admin.dosen.matkul', ['matkul' => $matkul]);
    }

}