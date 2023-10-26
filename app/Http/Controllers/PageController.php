<?php

namespace App\Http\Controllers;

use App\Models\Weeding;
use App\Models\WeedingInvitation;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function presentBride($name = null)
    {
        $weeding = Weeding::where('code','A-N')->first();
        if($name){
            $slug = $name;
            $name = strtolower(str_replace(['-',"'",' '],' ',$name));
            $invitation = WeedingInvitation::where('weeding_id',$weeding->id)->where('slug',$slug)->first();
            if(!$invitation){
                return abort(404);
            }
        }
        $code = 'A-N';
        return view('present.index',compact('name','weeding','code'));
    }
    public function presentGroom($name = null)
    {
        $weeding = Weeding::where('code','N-A')->first();
        if($name){
            $slug = $name;
            $name = strtolower(str_replace(['-',"'",' '],' ',$name));
            $invitation = WeedingInvitation::where('weeding_id',$weeding->id)->where('slug',$slug)->first();
            if(!$invitation){
                return abort(404);
            }
        }
        $code = 'N-A';
        return view('present.index',compact('name','weeding','code'));
    }
}
