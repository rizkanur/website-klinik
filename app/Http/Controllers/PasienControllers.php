<?php

namespace App\Http\Controllers;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class PasienControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pas = Pasien::latest()->paginate(5);
        return view ('pas.index',compact('pas'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Tanggal' => 'required',
            'NamaPasien' => 'required',
            'Alamat' => 'required',
            'JenisKelamin' => 'required',
            'NoTelepon' => 'required',
            'Layanan' => 'required',
        ]);
        Pasien::create($request->all());

        return redirect()->route('pas.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pas)
    {
        return view('pas.show',compact('pas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasien $pas)
    {
        return view('pas.edit', compact('pas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Pasien $pas)
    {
        $request->validate([
            'Tanggal' => 'required',
            'NamaPasien' => 'required',
            'Alamat' => 'required',
            'JenisKelamin' => 'required',
            'NoTelepon' => 'required',
            'Layanan' => 'required',
        ]);

        $pas->update($request->all());

        return redirect()->route('pas.index')->with('succes','Pasien Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasien $pas)
    {
        $pas->delete();

        return redirect()->route('pas.index')->with('succes','Data Pasien Berhasil di Hapus');
    }
}
