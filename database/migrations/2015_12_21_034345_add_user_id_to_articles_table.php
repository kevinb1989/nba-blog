<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            //add user_id field to the articles table
            $table -> integer('user_id') 
                -> unsigned()
                -> nullable() 
                -> default(1) 
                -> after('id');

            //add a foreign key referencing the users table
            $table -> foreign('user_id')
                -> references('id')
                -> on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            //drop foreign key articles_user_id_foreign
            $table -> dropForeign('articles_user_id_foreign');

            //drop user_id column
            $table -> dropColumn('user_id');
        });
    }
}
