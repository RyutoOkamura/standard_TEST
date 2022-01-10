<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname', '255');
            // $table->string('last-name', '255');
            // $table->string('first-name', '255');
            $table->tinyInteger('gender');
            $table->string('email', '255');
            $table->string('postcode', '255');
            $table->string('address', '255');
            $table->string('building_name', '255');
            $table->text('opinion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}