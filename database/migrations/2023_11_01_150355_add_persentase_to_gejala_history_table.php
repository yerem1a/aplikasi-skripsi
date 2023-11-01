<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPersentaseToGejalaHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gejala_history', function (Blueprint $table) {
            $table->decimal('persentase', 8, 2)->nullable()->after('penyakit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gejala_history', function (Blueprint $table) {
            $table->dropColumn('persentase');
        });
    }
}
