<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;
    protected $table = 'tbl_member';

    protected $fillable = ['user_id','type_loan_interest','limit_loan'];

    protected $dates = ['created_at', 'updated_at'];
}
