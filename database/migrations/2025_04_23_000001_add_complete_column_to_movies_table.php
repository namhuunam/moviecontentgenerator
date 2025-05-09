<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCompleteColumnToMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movies', function (Blueprint $table) {
            if (!Schema::hasColumn('movies', 'complete')) {
                $table->tinyInteger('complete')->default(0)->after('content');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
            if (Schema::hasColumn('movies', 'complete')) {
                $table->dropColumn('complete');
            }
        });
    }
}