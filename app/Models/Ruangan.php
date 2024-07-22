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
}
