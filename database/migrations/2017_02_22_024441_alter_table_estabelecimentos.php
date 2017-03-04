<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableEstabelecimentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('estabelecimentos', function (Blueprint $table) {
        //     $table->string('cnes', 7)->unique()->change();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('estabelecimentos', function (Blueprint $table) {
        //     $table->dropUnique('cnes', 7);
        // });
    }
}
