<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'users';

    /**
     * Run the migrations.
     * @table USERS
     *
     * @return void
     */
    public function up()
    {
//        if (Schema::hasTable($this->set_schema_table)) return;
//        Schema::create($this->set_schema_table, function (Blueprint $table) {
//            $table->engine = 'InnoDB';
//            $table->increments('user_id');
//            $table->string('user_name', 45);
//            $table->string('user_password', 45);
//        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
       Schema::dropIfExists($this->set_schema_table);
     }
}
