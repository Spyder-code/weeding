<?php

namespace App\Http\Controllers;

use App\Models\Weeding;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function presentBride($name = null)
    {
        if($name){
            $name = strtolower(str_replace(['-',"'",' '],' ',$name));
        }
        $weeding = Weeding::where('code','A-N')->first();
        $code = 'A-N';
        return view('present.index',compact('name','weeding','code'));
    }
    public function presentGroom($name = null)
    {
        if($name){
            $name = strtolower(str_replace(['-',"'",' '],' ',$name));
        }
        $weeding = Weeding::where('code','N-A')->first();
        $code = 'N-A';
        return view('present.index',compact('name','weeding','code'));
    }
}
