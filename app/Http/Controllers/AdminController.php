<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public funntion dashboard(Request $request)
    {
      $query = equipo::$query();

      if ($request->has('aprendiz_id')){
          $query->where('aprendiz_id',$request->input('aprendiz_id'));
      }
      

      
      if ($request->has('estado')){
        $query->where('estado',$request->input('estado'));
    }

    $equipos = $query->get();
    $aprendices =Aprendiz::all();

    return vieew('admin.dashboar', compact('equipos', 'aprendices'));

    }
}
