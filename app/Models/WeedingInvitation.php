<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WeedingInvitation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'weeding_id',
        'name',
        'slug',
        'phone',
        'address',
        'send_message_status',
        'attended',
        'message',
    ];

    public function wa()
    {
        //Terlebih dahulu kita trim dl
        $nomorhp = trim($this->phone);
       //bersihkan dari karakter yang tidak perlu
        $nomorhp = strip_tags($nomorhp);
       // Berishkan dari spasi
        $nomorhp= str_replace(" ","",$nomorhp);
       // bersihkan dari bentuk seperti  (022) 66677788
        $nomorhp= str_replace("(","",$nomorhp);
       // bersihkan dari format yang ada titik seperti 0811.222.333.4
        $nomorhp= str_replace(".","",$nomorhp);

        //cek apakah mengandung karakter + dan 0-9
        if(!preg_match('/[^+0-9]/',trim($nomorhp))){
            // cek apakah no hp karakter 1-3 adalah +62
            if(substr(trim($nomorhp), 0, 3)=='+62'){
                $nomorhp= trim($nomorhp);
            }
            // cek apakah no hp karakter 1 adalah 0
            elseif(substr($nomorhp, 0, 1)=='0'){
                $nomorhp= '62'.substr($nomorhp, 1);
            }
        }
        return $nomorhp;
    }
}
