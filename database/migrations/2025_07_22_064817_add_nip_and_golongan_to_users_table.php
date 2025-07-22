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
        Schema::table('users', function (Blueprint $table) {
        $table->string('nip')->unique()->nullable();
        $table->string('pangkat')->nullable();
        $table->string('golongan')->nullable();
        $table->date('tmt_cpns')->nullable();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
        $table->dropColumn(['nip', 'pangkat', 'golongan', 'tmt_cpns']);
        });
    }
};
