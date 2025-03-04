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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', $precision = 20, $scale = 2);
            $table->unsignedBigInteger('admin_id');
            $table->string('image');
            $table->string('location_text');
            $table->text('location_link');
            $table->string('heading');
            $table->text('description');
            $table->text('url');
            $table->timestamps();

            $table->foreign('admin_id')->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
