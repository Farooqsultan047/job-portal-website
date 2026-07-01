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
 Schema::create('job_portals', function (Blueprint $table) {
    $table->id();

    $table->string('title');
    $table->string('category');
    $table->string('job_nature');
    $table->integer('vacancy');
    $table->string('salary')->nullable();
    $table->string('location');
    $table->longText('description');
    $table->longText('benefits')->nullable();
    $table->longText('responsibility')->nullable();
    $table->longText('qualifications')->nullable();
    $table->string('keywords');
    $table->string('company');
    $table->string('website')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_portals');
    }
};
 