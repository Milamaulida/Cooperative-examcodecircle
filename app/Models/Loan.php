<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    protected $table = 'tbl_loan';

    protected $fillable = ['no_loan','member_id','payment_method_id','description','loan_amount','loan_interest','admin_fee','total_loan','total_installment','tenor','start_at','end_at'];

    protected $dates = ['created_at', 'updated_at'];
}
