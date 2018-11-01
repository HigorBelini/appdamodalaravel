<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImagesToPromotionsForUserpromotions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('userspromotions', function (Blueprint $table) {
            $table->string('promotion_promotionimage');
            $table->string('promotion_logocompany');
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
            $table->dropColumn('promotion_promotionimage');
            $table->dropColumn('promotion_logocompany');

        });
    }
}
