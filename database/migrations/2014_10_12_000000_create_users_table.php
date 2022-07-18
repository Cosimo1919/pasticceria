<?php

use App\Models\User;
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
            $table->string('name');
            $table->string('user_lastname');
            $table->string('user_city');
            $table->string('user_address');
            $table->string('user_phone');
            $table->json('chart_products')->nullable();
            $table->string('role')->default('user');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        $user = new User();
        $user->name = 'Cosimo';
        $user->email = 'co@co.it';
        $user->password = bcrypt('12345678');
        $user->user_lastname = 'Di Lorenzo';
        $user->user_city = 'Salerno';
        $user->user_phone = '3313256343';
        $user->user_address = 'Via paolo';

        $user->save();
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
