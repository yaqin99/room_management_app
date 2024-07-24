<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function kategori(){

        return $this->belongsTo(Kategori::class);
 
     }
    public function gender(){

        return $this->belongsTo(Gender::class);
 
     }

     public function scopeSearchRuangan($query ){
        if (request('search')) {
            $query->whereHas('kategori', function ($query) {
                $query->where('nama_kategori','like','%'.request('search').'%');
                // ->orWhere('nik','like','%'.request('search').'%');
            })->orWhere('nama_ruangan','like','%'.request('search').'%');
                // ->orWhere('nik','like','%'.request('search').'%');
        
      }
      }
}
