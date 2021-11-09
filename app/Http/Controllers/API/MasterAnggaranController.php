<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterAnggaranModel;

class MasterAnggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MasterAnggaranModel::all();
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
        $this->validate($request, [
            'mataanggaran' => 'required|string|max:50',
            'totalanggaran' => 'required|integer'
        ]);

        return MasterAnggaranModel::create([
            'mataanggaran' => $request->mataanggaran,
            'totalanggaran' => $request->totalanggaran
        ]);
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
        $this->validate($request, [
            'mataanggaran' => 'required|string|max:50',
            'totalanggaran' => 'required|string',
        ]);

        $dtPengguna = [
            'mataanggaran' => $request->mataanggaran,
            'totalanggaran' => $request->totalanggaran,
        ];

        $ubahData = MasterAnggaranModel::findOrFail($id);
        $ubahData->update($dtPengguna);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = MasterAnggaranModel::findOrFail($id);
        $hapus->delete();
    }
}
