<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use APP\Models\Pembeli;
class Pembeli extends Model
{
    use HasFactory;
    protected $table = 'pembeli';

    protected $guarded = [];

public function barang(){
    return $this->belongsToMany(Barang::class);
}
}