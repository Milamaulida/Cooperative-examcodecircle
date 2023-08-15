<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_loan', function (Blueprint $table) {
            $table->id();
            $table->varchar('no_loan');
            $table->integer('member_id');
            $table->integer('payment_method_id');
            $table->text('description');
            $table->integer('loan_amount');
            $table->integer('loan_interest');
            $table->integer('admin_fee');
            $table->integer('total_loan');
            $table->integer('total_installment');
            $table->tinyInteger('tenor');
            $table->dateTime('start_at');
            $table->dateTime('end_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_loan');
    }
};
