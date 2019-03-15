<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


class EntrustSetupTables extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::connection('mysql')->beginTransaction();

        // Create table for storing roles
        Schema::connection('mysql')->create('roles', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Create table for associating roles to users (Many-to-Many)
        Schema::connection('mysql')->create('role_user', function (Blueprint $table)
        {
            $table->integer('user_id')->unsigned();
            $table->integer('role_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade')->onDelete('cascade');

            $table->primary([
                'user_id',
                'role_id'
            ]);
        });

        // Create table for storing permissions
        Schema::connection('mysql')->create('permissions', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Create table for associating permissions to roles (Many-to-Many)
        Schema::connection('mysql')->create('permission_role', function (Blueprint $table)
        {
            $table->integer('permission_id')->unsigned();
            $table->integer('role_id')->unsigned();

            $table->foreign('permission_id')->references('id')->on('permissions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade')->onDelete('cascade');

            $table->primary([
                'permission_id',
                'role_id'
            ]);
        });

        DB::connection('mysql')->commit();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        DB::connection('mysql')->beginTransaction();
        Schema::connection('mysql')->drop('permission_role');
        Schema::connection('mysql')->drop('permissions');
        Schema::connection('mysql')->drop('role_user');
        Schema::connection('mysql')->drop('roles');
        DB::connection('mysql')->commit();
    }
}
