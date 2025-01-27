<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('items', function (Blueprint $table) {
        $table->decimal('total_price', 10, 2)->nullable(); // Anda dapat menyesuaikan tipe data sesuai kebutuhan
    });
}

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::table('items', function (Blueprint $table) {
        $table->dropColumn('total_price');
    });
}
};
