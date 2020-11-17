<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('tampil-mahasiswa',['mahasiswas'=>$mahasiswas]);
    }

    public function create(){
        return view('mahasiswa.form');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nim' => 'required|size:9|unique:mahasiswas',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'fakultas' => 'required',
            'jurusan' => 'required',
            'ipk' => 'required',
            
        ]);

        Mahasiswa::create($validateData);

        $request->session()->flash('pesan',"Data berhasil ditambahkan");
        return redirect()->route('mahasiswa.index');
    }

    public function detail($mahasiswa)
    {
        $result=Mahasiswa::find($mahasiswa);
        return view('mahasiswa.detail',['mahasiswa'=>$result]);
    }

    public function edit($mahasiswa)
    {
        $result=Mahasiswa::find($mahasiswa);
        return view('mahasiswa.edit',['mahasiswa'=>$result]);
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validateData = $request->validate([
            'nim' => 'required|size:9|unique:mahasiswas,nim,'.$mahasiswa->id,
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'fakultas' => 'required',
            'jurusan' => 'required',
            'ipk' => 'required',
        ]);

        Mahasiswa::where('id',$mahasiswa->id)->update($validateData);
        $request->session()->flash('pesan',"Data berhasil diperbaruhi");
        return redirect()->route('mahasiswa.detail',['mahasiswa'=>$mahasiswa->id]);
    }

    public function delete(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('pesan',"Data berhasil Dihapus");
    }
}