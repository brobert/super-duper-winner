<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class Worklog extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $this->down();

        Schema::connection('hrm')->create('calendars', function (Blueprint $table)
        {
            $table->increments('id');
            $table->date('date');
            $table->timestamps();
        });

        Schema::connection('hrm')->create('work_types', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 50);
            $table->timestamps();
        });

        Schema::connection('hrm')->create('work_logs', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('date_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->timestamps();

            $table->foreign('date_id')->references('id')->on('calendars');
            $table->foreign('type_id')->references('id')->on('work_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::connection('hrm')->dropIfExists('work_logs');
        Schema::connection('hrm')->dropIfExists('work_types');
        Schema::connection('hrm')->dropIfExists('calendars');
        //
    }
}
