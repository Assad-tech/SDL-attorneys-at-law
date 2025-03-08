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
        Schema::create('supporting_staff', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable()->comment('designation');
            $table->string('staff_fullname')->nullable();
            $table->text('staff_education')->nullable();
            $table->string('staff_professional_aff')->nullable();
            $table->text('staff_bio')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->string('staff_image')->nullable();
            $table->string('staff_banner')->nullable();
            $table->string('staff_fb')->nullable();
            $table->string('staff_insta')->nullable();
            $table->string('staff_yelp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supporting_staff');
    }
};
