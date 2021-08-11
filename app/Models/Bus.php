<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $table  = 'bus';

    public function member()
    {
      return $this->hasOne(Member::class, 'id', 'member_id');
    }
}
