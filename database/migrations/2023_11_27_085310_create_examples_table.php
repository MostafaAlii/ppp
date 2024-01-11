<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('examples', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->enum('type', ['photo_retouch', 'photo_album', 'photo_frame', 'photo_flyer'])->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('examples');
    }
};