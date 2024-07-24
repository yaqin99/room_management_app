<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function scopeSearchDosen($query ){
        if (request('search')) {
            
                $query->where('nama_dosen','like','%'.request('search').'%');
             
        
      }
      }

}
