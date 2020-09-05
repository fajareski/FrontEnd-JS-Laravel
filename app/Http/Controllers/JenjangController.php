<?php

namespace App\Http\Controllers;

use App\Jenjang;
use Illuminate\Http\Request;

class JenjangController extends Controller
{
    public function index(Request $request)
    {
          
      $Jenjang = Jenjang::where('parent_id',0)->get();
     
      return view('pages.Jenjang',["jenjangs" => $Jenjang]);
    }    
    public function subcat(Request $request)
    {
         
        $parent_id = $request->cat_id;
         
        $kelas = Jenjang::where('id',$parent_id)
                              ->with('kelas')
                              ->get();
        return response()->json([
            'kelas' => $kelas
        ]);
    }
}
