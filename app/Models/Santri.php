<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'nama_kamar',
        'kelas',
        'nama',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
