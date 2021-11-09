<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ListAnggaranModel;

class ListAnggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ListAnggaranModel::all();
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
            'totalanggaran' => 'required|integer',
            'konsumsianggaran' => 'required|integer',
            'sisaanggaran' => 'required|integer'
        ]);

        return ListAnggaranModel::create([
            'mataanggaran' => $request->mataanggaran,
            'totalanggaran' => $request->totalanggaran,
            'konsumsianggaran' => $request->konsumsianggaran,
            'sisaanggaran' => $request->sisaanggaran
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
            'totalanggaran' => 'required|integer',
            'konsumsianggaran' => 'required|integer',
            'sisaanggaran' => 'required|integer'
        ]);

        $dtPengguna = [
            'mataanggaran' => $request->mataanggaran,
            'totalanggaran' => $request->totalanggaran,
            'konsumsianggaran' => $request->konsumsianggaran,
            'sisaanggaran' => $request->sisaanggaran
        ];

        $ubahData = ListAnggaranModel::findOrFail($id);
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
        //
    }
}
