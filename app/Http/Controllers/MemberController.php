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
