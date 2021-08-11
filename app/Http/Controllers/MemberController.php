<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
  
  private $member;

  public function __construct()
  {
    $this->member = new Member;
  }
  
  
  public function index()
  {
    $data['member'] = $this->member->get();
    return view('member', $data);
  }
  
  public function create()
  {
    return view('tambahMember');
  }
  
  public function store(Request $request)
  {
    $validate = $request->validate([
      'nama_member' => 'required',
      'nama_po'     => 'required'
    ]);

    $this->member->nama_member  = $request->nama_member;
    $this->member->nama_po      = $request->nama_po;
    $this->member->save();

    return redirect('/member')->with('status', 'Berhasil Tambah Member');
  }
  
  public function edit($id_member)
  {
    $member = $this->member->find($id_member);
    return view('/editMember', $member);
  }
  
  public function update(Request $request, $id_member)
  {
    $validate = $request->validate([
      'nama_member' => 'required',
      'nama_po'     => 'required'
    ]);

    $member               = $this->member->find($id_member);
    $member->nama_member  = $request->nama_member;
    $member->nama_po      = $request->nama_po; 
    $member->save();

    return redirect('/member')->with('status', 'Berhasil Edit Member');
  }
  
  public function destroy($id_member)
  {
    $member = $this->member->find($id_member);
    $member->delete();
    return redirect('/member')->with('status', 'Berhasil Hapus Member');
  }
}
