<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->double('balance')->nullable();
            $table->double('profit')->nullable();
            $table->double('bonus')->nullable();
            $table->double('investment')->nullable();

            $table->text('message')->nullable();
            $table->string('wallet_address')->nullable();

            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('acct_type')->nullable();
//            $table->string('username')->unique();
            $table->integer('admin')->default(0);
            $table->integer('status')->default(0);
            $table->integer('wt_status')->default(0);
            $table->integer('wt_suspense')->default(0);

            $table->rememberToken();
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
}
