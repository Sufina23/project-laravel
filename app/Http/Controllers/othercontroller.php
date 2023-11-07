<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\lulusan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class othercontroller extends Controller
{
    public function profile(){
        return view ('profile');
    }
    public function berita(){
        return view ('berita');
    }
    public function aktivitas(){
        return view ('aktivitas');
    }
    public function biodata(){
        return view ('biodata');
    }
    public function home(){
        return view ('home');
    }
    public function inber(){
        return view ('admin.inber');
    }
    public function inda(){
        return view ('admin.inda');
    }
    public function postInber(Request $request){
     
            $request->validate([
                'judul' => 'required',
                'deskripsi' => 'required',
                'isi' => 'required'
                
            ]);
            $berita = new berita;
    
            $berita->judul = $request->judul;
            $berita->deskripsi = $request->deskripsi;
            $berita->isi = $request->isi;
          
            $berita->save();
            
            if($berita){
                return redirect('/admin/home')->with('success', 'Berita berhasil dibuat');
            } else {
                return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali
            beberapa saat!');
            }
        
    }
    public function postInda(Request $request){
     
        $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'jurusan' => 'required',
            'prodi' => 'required',
            'ipk' => 'required',
            'tahun' => 'required'
        ]);
        $lulusan = new lulusan;

        $lulusan->nama = $request->nama;
        $lulusan->jk = $request->jk;
        $lulusan->jurusan = $request->jurusan;
        $lulusan->prodi = $request->prodi;
        $lulusan->ipk = $request->ipk;
        $lulusan->tahun = $request->tahun;
      
        $lulusan->save();
        
        if($lulusan){
            return redirect('/admin/home')->with('success', 'Profil lulusan berhasil ditambahkan');
        } else {
            return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali
        beberapa saat!');
           }
    
    }

}