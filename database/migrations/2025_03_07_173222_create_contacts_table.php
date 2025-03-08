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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('contact_banner')->nullable();
            $table->string('side_image')->nullable();
            $table->string('contact_heading')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('address')->nullable();
            $table->string('office_hours_open')->nullable();
            $table->string('office_hours_closed')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
