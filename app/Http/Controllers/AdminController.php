<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\Member;

class AdminController extends Controller
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
    $data['bus']    = $this->bus->count();
    $data['member'] = $this->member->count();
    
    $data['grafikBus']    = [];
    $data['grafikMember'] = [];
    for ($i = 1; $i <= 12; $i++) {
      if (strlen($i) < 2) $j  = '0' . $i;
      else $j = $i;
      $bus                      = $this->bus->whereYear('tanggal_masuk', 2021)->whereMonth('tanggal_masuk', $j)->count();
      $member                   = $this->member->whereYear('created_at', 2021)->whereMonth('created_at', $j)->count();
      $data['grafikBus'][$i]    = $bus;
      $data['grafikMember'][$i] = $member;
    }
    return view('dashboard', $data);
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
