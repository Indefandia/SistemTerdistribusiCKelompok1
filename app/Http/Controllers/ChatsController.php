<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //ngambil data dari database
use Illuminate\Support\Facades\Auth; //informasi akun yang lagi login
use App\Chat; //deklarasikan isi chat (manggil tabel chat). semua data bisa dipanggil
use App\User; //memanggil tabel user

class ChatsController extends Controller
{
    public function index()
    {
        $saya = User::where('id', Auth::user()->id)->first(); //mendeklarasikan akun yang sedang login (id)
        $temans = User::all(); //memanggil semua data dari tabel user
        $chats = Chat::all(); //manggil dari tabel chat dimana user id itu pakek userid yang lagi login
        return view('admin/chat/index', compact('saya','temans','chats')); //setelah mendaklarasikan tampilkan view
    }
    public function send(Request $request) //membuat fungsi baru mengirim teks
    {
        if($request->text == null) //ketika inputan null, lalu diklik kirim 
        {
            return redirect()->back();
        }

        else
        {    
            $chat = new Chat(); //mendeklarasikan membuat data baru di tabel chat
            $chat->user_id = Auth::user()->id; //deklarasi user id diambil dari user yang lagi login
            $chat->text = $request->text; 
            
            $chat->save();       
            
            return redirect()->back(); //balik ke index
        }
    }
}
