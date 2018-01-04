<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tip;
use Session;

class TipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tip = Tip::all();
        return view('tips.index', compact('tip'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->validate($request, [
            'nama'=>'required',
            'ttl'=>'required',
            'alamat'=>'required',
            'notlp'=>'required',
            'jk'=>'required',
            'agama'=>'required',
            'kewarganegaraan'=>'required',
            'status'=>'required',
            'email'=>'required',
            'hoby'=>'required',
            'sd'=>'required',
            'smp'=>'required',
            'sma'=>'required',
            'pt'=>'required',
            'pk'=>'required']);
        $civi = Civi::create($request->only('nama','ttl','alamat','notlp','jk','agama','kewarganegaraan','status','email','hoby','sd','smp','sma','pt','pk'));
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan $civi->nama"]);
        return redirect()->route('civis.index');
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
        //
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
