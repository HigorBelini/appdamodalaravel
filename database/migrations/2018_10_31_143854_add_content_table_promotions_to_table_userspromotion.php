<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContentTablePromotionsToTableUserspromotion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('userspromotions', function (Blueprint $table) {
            $table->date('promotion_startdate');
            $table->date('promotion_finaldate');
            $table->text('promotion_descriptive');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('userspromotions', function (Blueprint $table) {
            $table->dropColumn('promotion_startdate');
            $table->dropColumn('promotion_finaldate');
            $table->dropColumn('promotion_descriptive');
        });
    }
}


