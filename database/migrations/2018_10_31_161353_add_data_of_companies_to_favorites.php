<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDataOfCompaniesToFavorites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('favorites', function (Blueprint $table) {
            $table->string('companies_fantasyname');
            $table->integer('companies_number');
            $table->text('companies_shopfacade');
            $table->text('companies_logo');
            $table->double('companies_latitude', 15, 12);
            $table->double('companies_longitude', 15, 12);
            $table->string('companies_industry');
            $table->text('companies_descriptive');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('favorites', function (Blueprint $table) {
            $table->dropColumn('companies_fantasyname');
            $table->dropColumn('companies_number');
            $table->dropColumn('companies_shopfacade');
            $table->dropColumn('companies_logo');
            $table->dropColumn('companies_latitude', 15, 12);
            $table->dropColumn('companies_longitude', 15, 12);
            $table->dropColumn('companies_industry');
            $table->dropColumn('companies_descriptive');
        });
    }
}
