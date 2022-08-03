<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// storage ketik manual saja jika tidak ter-detect
use Illuminate\Support\Facades\Storage;

class ProductGallery extends Model
{
    use HasFactory, SoftDeletes;

     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'products_id',
        'url',
    ];

    // untuk di API
    // meng-convert dari field yg kita punya jadi yg kita inginkan outputnya seperti apa
    public function getUrlAttribute($url)
    {
        return config('app.url') . Storage::url($url);
    }
}
