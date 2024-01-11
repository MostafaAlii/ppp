<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void {
        Schema::table('prices', function (Blueprint $table) {
            $table->string('price')->nullable();
        });
    }

    public function down(): void {
        Schema::table('prices', function (Blueprint $table) {
            $table->dropColumn('price');
        });
    }
};
