<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\Member;

class BusController extends Controller
{
  private $bus;
  private $member;

  public function __construct()
  {
    $this->bus    = new Bus;
    $this->member = new Member;    
  }
  
  public function index()
  {
    $data['bus']  = $this->bus->get();
    return view('busMasuk', $data);
  }
  
  public function create()
  {
    $data['member'] = $this->member->get();
    return view('tambahBusMasuk', $data);
  }
  
  public function store(Request $request)
  {
    $validate = $request->validate([
      'member_id'     => 'required',
      'tanggal_masuk' => 'required'
    ]);

    $this->bus->member_id     = $request->member_id;
    $this->bus->tanggal_masuk = $request->tanggal_masuk;
    $this->bus->save();

    return redirect('/bus_masuk')->with('status', 'Berhasil Menambah Data');
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
