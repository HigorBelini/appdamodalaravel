<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('socialname');
            $table->string('fantasyname');
            $table->integer('number');
            $table->string('logo'); //imagem
            $table->string('shopfacade'); //imagem
            $table->float('latitude', 8, 2);
            $table->float('longitude', 8, 2);
            $table->string('industry');
            $table->text('descriptive');
            $table->text('keywords');
            $table->date('date');
            $table->integer('user_id')->unsigned()->default(1);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
