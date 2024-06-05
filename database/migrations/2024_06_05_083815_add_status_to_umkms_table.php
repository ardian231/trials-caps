<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToUmkmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('umkms', function (Blueprint $table) {
            $table->enum('status', ['terima oleh sistem', 'tolak oleh sistem'])->default('terima oleh sistem')->after('lokasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('umkms', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
