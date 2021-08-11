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
  
  public function edit($id)
  {
    $data           = $this->bus->find($id);
    $data['member'] = $this->member->get();
    return view('editBusMasuk', $data);
  }
  
  public function update(Request $request, $id)
  {
    $bus  = $this->bus->find($id);
    $bus->member_id     = $request->member_id;
    $bus->tanggal_masuk = $request->tanggal_masuk;
    $bus->save();

    return redirect('/bus_masuk')->with('status', 'Berhasil menambah data');
  }
  
  public function destroy($id)
  {
    $bus  = $this->bus->find($id);
    $bus->delete();

    return redirect('/bus_masuk')->with('status', 'Berhasil hapus data');
  }
}
