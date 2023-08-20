<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbUser extends Model
{
    use HasFactory;
    protected $table = 'tbl_user';

    protected $fillable = ['name','email','password','phone','address','birthday','no_ktp','status','role'];

    protected $dates = ['created_at', 'updated_at'];
}
