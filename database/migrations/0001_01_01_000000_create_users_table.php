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
        Schema::create('account', function (Blueprint $table) {
            $table->string('username', 45)->primary();
            $table->string('password');
            $table->string('name', 45);
            $table->string('role', 45)->default('author');
        });

        Schema::create('post', function (Blueprint $table) {
            $table->string('idpost')->primary();
            $table->string('title');
            $table->string('content');
            $table->timestamp('date');
            $table->string('username', 45);
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users', 'post', 'sessions');
    }
};
