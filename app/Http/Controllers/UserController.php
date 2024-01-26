<?php

namespace App\Http\Controllers;

use App\Models\eskul;
use App\Models\Item;
use App\Models\pinjamitem;
use App\Models\pinjampl;
use App\Models\Place;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function index() {
        $user = User::all();
        $place = Place::where('status', 'Active')->get();
        $item = Item::where('status', 'Active')->get();
        $pinjampl = pinjampl::all();
        $pinjamitem = pinjamitem::all();
        return view('/user/homeuser', compact('user','place','item','pinjampl','pinjamitem'));
    }

    public function userv()
    {
        $user = User::all();
        return view ('/admin/useradmin', ['user' => $user]);
    }

    public function profile($id)
    {   
        $userid = Auth::user();
        $user = User::where('id', $userid->id)->get();
        $eskul = Eskul::all();
        return view('user.profileuser', compact('user', 'eskul'));
    }

    public function peditu($id)
    {
        $user = User::findOrFail($id);
        $eskul = eskul::all();

        return view('user.profileuseredit', compact('user','eskul'));
    }
    
    public function pupdateu($id, Request $request)
    {   
        $user = User::findOrFail($id);
        $user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->has('password') && $request->password != '') {
            $user->password = $request->password;
        }
        $user->role = $request->role;
        $user->id_eskul = $request->id_eskul;

        if ($request->hasFile('photouser')) {
            $file = $request->file('photouser');
            $photouser = time() . "_" . $file->getClientOriginalName();
            $tujuanupload = 'Gambar';
            $file->move($tujuanupload, $photouser);
            $user->photouser = $photouser;
        }
        $user->save();
    
        return redirect('/profileuser/{id}');
    }

    public function profila($id)
    {   
        $userid = Auth::user();
        $user = User::where('id', $userid->id)->get();
        $eskul = Eskul::all();
        return view('admin.profileadmin', compact('user', 'eskul'));
    }

    public function pedita($id)
    {
        $user = User::findOrFail($id);
        $eskul = eskul::all();

        return view('admin.profileadminedit', compact('user','eskul'));
    }
    
    public function pupdatea($id, Request $request)
    {   
        $user = User::findOrFail($id);
        $user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->has('password') && $request->password != '') {
            $user->password = $request->password;
        }
        $user->role = $request->role;
        $user->id_eskul = $request->id_eskul;

        if ($request->hasFile('photouser')) {
            $file = $request->file('photouser');
            $photouser = time() . "_" . $file->getClientOriginalName();
            $tujuanupload = 'Gambar';
            $file->move($tujuanupload, $photouser);
            $user->photouser = $photouser;
        }
        $user->save();
    
        return redirect('/profileadmin/{id}');
    }

    public function pinjamsuccess() {
        return view('user.pinjamsukses');
    }

    public function history() 
    {
        $user = User::all();
        $userid = Auth::user();
        $item = Item::all();
        $place = Place::all();
        $pinjampl = pinjampl::where('id', $userid->id)->get();
        $pinjamitem = pinjamitem::where('id', $userid->id)->get();
        return view('user.history', compact('user', 'item', 'place', 'pinjampl', 'pinjamitem'));
    }

    public function schedule()
    {
        $user = User::all();
        $item = Item::all();
        $place = Place::all();
        $pinjampl = pinjampl::all();
        $pinjamitem = pinjamitem::all();
        $eskul = eskul::all();
        return view('user.scheduleuser',compact('user', 'item', 'place', 'pinjampl', 'pinjamitem', 'eskul'));
    }

    public function scheadm()
    {
        $user = User::all();
        $item = Item::all();
        $place = Place::all();
        $pinjampl = pinjampl::all();
        $pinjamitem = pinjamitem::all();
        $eskul = eskul::all();
        return view('admin.adminschedule',compact('user', 'item', 'place', 'pinjampl', 'pinjamitem', 'eskul'));
    }

    public function terimap($id_pinjampl)
    {
        $pinjampl = pinjampl::findOrFail($id_pinjampl);
        $pinjampl->statadmin = 'DiTerima';
        $pinjampl->save();

        return redirect('/home/admin/sch');
    } 
    public function tolakp($id_pinjampl)
    {
        $pinjampl = pinjampl::findOrFail($id_pinjampl);
        $pinjampl->statadmin = 'DiTolak';
        $pinjampl->save();

        return redirect('/home/admin/sch');
    } 
    public function destroyp($id_pinjampl)
    {
        $pinjampl = pinjampl::findOrFail($id_pinjampl);
        $pinjampl->delete();

        return redirect('/home/admin/sch');
    }

    public function terimai($id_pinjamitem)
    {
        $pinjamitem = pinjamitem::findOrFail($id_pinjamitem);
        $pinjamitem->statadmin = 'DiTerima';
        $pinjamitem->save();

        return redirect('/home/admin/sch');
    } 
    public function tolaki($id_pinjamitem)
    {
        $pinjamitem = pinjamitem::findOrFail($id_pinjamitem);
        $pinjamitem->statadmin = 'DiTolak';
        $pinjamitem->save();

        return redirect('/home/admin/sch');
    } 
    public function destroyi($id_pinjamitem)
    {
        $pinjamitem = pinjamitem::findOrFail($id_pinjamitem);
        $pinjamitem->delete();

        return redirect('/home/admin/sch');
    }
}
