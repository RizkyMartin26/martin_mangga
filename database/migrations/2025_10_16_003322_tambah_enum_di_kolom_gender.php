<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('pelanggan', function (Blueprint $table) {
            // Mengubah tipe kolom 'gender' menjadi enum baru
            $table->enum('gender', ['Pria', 'Wanita', 'Lainnya', 'Non-biner'])->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('pelanggan', function (Blueprint $table) {
            // Mengembalikan ke enum sebelumnya dan membuatnya nullable
            $table->enum('gender', ['Male', 'Female', 'Other'])->nullable()->change();
        });
    }
};
