<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Renungan extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'renungans';

    protected $fillable = [
        'title',
        'bacaan',
        'ayat_kunci',
        'kalimat_prinsip',
        'kalimat_renung',
        'date_renungan',
        'content',
        'doa'
    ];
}
