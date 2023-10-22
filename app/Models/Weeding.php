<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Weeding extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code',
        'user_id',
        'groom',
        'bride',
        'ceremony_date',
        'ceremony_address',
        'ceremony_maps',
        'reception_date',
        'reception_address',
        'reception_maps',
        'is_live',
        'status',
    ];

    public function invitations()
    {
        return $this->hasMany(WeedingInvitation::class);
    }
}
