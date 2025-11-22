<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GBMember extends Model
{
    use HasFactory;
    protected $table = 'g_b_members';

    protected $fillable = [
        'full_name',
        'role_ev_gb',
        'designatation_org',
        'email',
        'short_bio',
        'photo',
    ];
}
