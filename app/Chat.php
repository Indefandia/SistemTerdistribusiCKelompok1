<?php

namespace App;

use Illuminate\Database\Eloquent\Model; //deklarasi model dari databse Chats

class Chat extends Model
{
    protected $fillable = ['text'];
    //memasukkan data teks biar bisa mengisikan ke database
    public function user() 
    {
        return $this->belongsTo('App\User', 'user_id'); //relasi antar tabel
    }
}
