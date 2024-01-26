<?php

namespace App\Http\Controllers;

use App\Models\eskul;
use App\Models\pinjampalce;
use App\Models\pinjampl;
use App\Models\Place;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use File;

class PlaceController extends Controller
{
    public function index()
    {
        $place = Place::all();
        return view('admin.placeadmin',['place' => $place]);
    }

    public function tambah()
    {
        return view("admin.placeadmintambah");
    }

    public function simpan(Request $request)
    {
        $request->validate([
             'nameplace' => 'required',
             'description' => 'required',
             'photoplace' => 'required',
             'status' => 'required'
         ],[
            'nameplace.required' => 'Nama Tempat Harus Diisi',
            'description.required' => 'Deskripsi Tempat Harus Diisi',
            'photoplace.required' => 'Foto Tempat Harus Diisi',
            'status.required' => 'Status Tempat Harus Diisi',
         ]);
        
        $file = $request->file('photoplace');
        $photoplace = time() . "_" . $file->getClientOriginalName();
        $tujuanupload = 'Gambar';
        $file->move($tujuanupload, $photoplace);

        Place::create([
            'nameplace' => $request->nameplace, 
            'description' => $request->description,
            'photoplace' => $photoplace,
            'status' => $request->status,
        ]);
        
        return redirect('/home/admin/place');
    }

    public function edit($id_place)
    {
        $p = Place::find($id_place);
        return view('admin.placeadminedit', ['place' => $p]);
    }

    public function update($place, Request $request)
    {   
        $file = $request->file('photoplace');
        $photoplace = time() . "_" . $file->getClientOriginalName();
        $tujuanupload = 'Gambar';
        $file->move($tujuanupload, $photoplace);

        $place = Place::find($place);
        $place->nameplace = $request->nameplace;
        $place->description = $request->description;
        $place->photoplace = $photoplace;
        $place->status = $request->status;
        $place->save();

        return redirect('/home/admin/place');
    }

    public function delete($id_place)
    {
        $file = Place::find($id_place);
        File::delete('Gambar/'.$file->photo);
        $file->delete();
    
        return redirect('/home/admin/place');
    }

    public function indexu()
    {
        $place = Place::where('status', 'Active')->get();
        $user = User::all();
        
        return view('user.placeuser', ['place' => $place]);
    }

    public function pinjamu()
    {
        $place = Place::all();
        $pinjampl = pinjampl::all();
        $user = User::all();
        $eskul = eskul::all();

        return view('user.placeuserpinjam', compact('place', 'pinjampl', 'user', 'eskul'));
    }

    public function saveu(Request $request)
    {   
        pinjampl::create([
            'id_place'=>$request->id_place,
            'id' =>$request->id,
            'description' =>$request->description,
            'time_from' =>$request->time_from,
            'time_to' =>$request-> time_to,
        ]);
        return redirect('/user/success');
    }
}
