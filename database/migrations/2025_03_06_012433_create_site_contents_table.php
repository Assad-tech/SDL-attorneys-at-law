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
        Schema::create('site_contents', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('logo')->nullable();
            $table->string('phone')->nullable();
            $table->string('why_choose_us_heading')->nullable();
            $table->text('why_choose_us_description')->nullable();
            $table->string('why_choose_us_image')->nullable();
            $table->text('footer_content')->nullable();
            $table->string('footer_address')->nullable();
            $table->string('footer_copyright')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_contents');
    }
};
