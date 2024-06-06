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
        Schema::create('heights', function (Blueprint $table) {
            $table->id();
            $table->integer("age");
            $table->enum("gender", ["P", "L"]);
            $table->integer("SD-3");
            $table->integer("SD-2");
            $table->integer("SD-1");
            $table->integer("SD0");
            $table->integer("SD1");
            $table->integer("SD2");
            $table->integer("SD3");
            $table->string("slug")->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heights');
    }
};