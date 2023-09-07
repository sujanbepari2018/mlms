<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('mobile')->nullable();
            $table->string('sponsrt_id');
            $table->string('password');
            $table->float('total_deposit')->default(0);
            $table->BigInteger('direct_grup')->default(0);
            $table->BigInteger('total_grup')->default(0);
            $table->BigInteger('is_active')->default(0);
            $table->string('active_date')->nullable();
            $table->float('total_income')->default(0);
            $table->float('total_withdrow')->default(0);
            $table->float('corrent_withdrow_request')->default(0);
            $table->BigInteger('total_grup_active')->default(0);
            $table->float('total_grup_deposit')->default(0);
            $table->BigInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
