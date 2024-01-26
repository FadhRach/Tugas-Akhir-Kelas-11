<?php

namespace App\Http\Controllers;

use App\Models\eskul;
use App\Models\Item;
use App\Models\pinjamitem;
use App\Models\User;
use Illuminate\Http\Request;
use File;

class ItemController extends Controller
{
    public function index()
    {
        $item = Item::all();
        return view('admin.itemadmin',['item' => $item]);
    }

    public function tambah()
    {
        return view("admin.itemadmintambah");
    }

    public function simpan(Request $request)
    {
         $request->validate([
             'nameitem' => 'required',
             'description' => 'required',
             'photoitem' => 'required',
             'status' => 'required'
         ],[
            'nameitem.required' => 'Nama Tempat Harus Diisi',
            'description.required' => 'Deskripsi Tempat Harus Diisi',
            'photoitem.required' => 'Foto Tempat Harus Diisi',
            'status.required' => 'Status Tempat Harus Diisi',
         ]);
        
        $file = $request->file('photoitem');
        $photoitem = time() . "_" . $file->getClientOriginalName();
        $tujuanupload = 'Gambar';
        $file->move($tujuanupload, $photoitem);

        item::create([
            'nameitem' => $request->nameitem, 
            'description' => $request->description,
            'photoitem' => $photoitem,
            'status' => $request->status,
        ]);
        
        return redirect('/home/admin/item');
    }
    
    public function edit($id_item)
    {
        $p = Item::find($id_item);
        return view('admin.itemadminedit', ['item' => $p]);
    }

    public function update($item, Request $request)
    {   
        $file = $request->file('photoitem');
        $photoitem = time() . "_" . $file->getClientOriginalName();
        $tujuanupload = 'Gambar';
        $file->move($tujuanupload, $photoitem);

        $item = item::find($item);
        $item->nameitem = $request->nameitem;
        $item->description = $request->description;
        $item->photoitem = $photoitem;
        $item->status = $request->status;
        $item->save();

        return redirect('/home/admin/item');
    }

    public function delete($id_item)
    {
        $file = Item::find($id_item);
        File::delete('Gambar/'.$file->photo);
        $file->delete();
    
        return redirect('/home/admin/item');
    }

    public function indexu()
    {
        $item = Item::where('status', 'Active')->get();
        $user = User::all();
        
        return view('user.itemuser', ['item' => $item]);
    }

    public function pinjamu()
    {
        $item = Item::all();
        $pinjamitem = pinjamitem::all();
        $user = User::all();
        $eskul = eskul::all();

        return view('user.itemuserpinjam', compact('item', 'pinjamitem', 'user', 'eskul'));
    }

    public function save(Request $request)
    {   
        pinjamitem::create([
            'id_item' =>$request->id_item,
            'id' =>$request->id,
            'description' =>$request->description,
            'time_from' =>$request->time_from,
            'time_to' =>$request-> time_to,
        ]);
        return redirect('/user/success');
    }

}
