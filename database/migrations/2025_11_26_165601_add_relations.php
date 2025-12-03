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
        Schema::table('fasilitashotels', function (Blueprint $table) {
            $table->foreign('id_hotel')->references('id')->on('hotels')->onDelete('cascade');
            $table->foreign('id_fasilitas')->references('id')->on('fasilitas')->onDelete('cascade');
        });

        Schema::table('hotels', function (Blueprint $table) {
            $table->foreign('id_kota')->references('id')->on('kotas')->onDelete('cascade');
        });

        Schema::table('kamars', function (Blueprint $table) {
            $table->foreign('id_hotel')->references('id')->on('hotels')->onDelete('cascade');
        });

        Schema::table('pemesanans', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_kamar')->references('id')->on('kamars')->onDelete('cascade');
        });

        Schema::table('reviews', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_hotel')->references('id')->on('hotels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropForeign(['id_user']);
            $table->dropForeign(['id_hotel']);
        });

        Schema::table('pemesanans', function (Blueprint $table) {
            $table->dropForeign(['id_user']);
            $table->dropForeign(['id_kamar']);
        });

        Schema::table('kamars', function (Blueprint $table) {
            $table->dropForeign(['id_hotel']);
        });

        Schema::table('hotels', function (Blueprint $table) {
            $table->dropForeign(['id_kota']);
        });

        Schema::table('fasilitashotels', function (Blueprint $table) {
            $table->dropForeign(['id_hotel']);
            $table->dropForeign(['id_fasilitas']);
        });
    }
};
