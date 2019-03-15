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

        Schema::connection('hrm')->create('configs', function (Blueprint $table)
        {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->string('attr');
            $table->string('value');
            $table->timestamps();
            $table->primary('attr');
        });

        Schema::connection('hrm')->create('free_days', function (Blueprint $table)
        {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->increments('id');
            $table->string('name');
            $table->smallInteger('year')->unsigned()->nullable();
            $table->tinyInteger('month')->unsigned();
            $table->tinyInteger('day')->unsigned();
            $table->timestamps();
        });

        Schema::connection('hrm')->create('work_types', function (Blueprint $table)
        {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->increments('id');
            $table->string('name', 50);
            $table->timestamps();
        });

        Schema::connection('hrm')->create('work_logs', function (Blueprint $table)
        {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->date('date');
            $table->integer('type_id')->unsigned();
            $table->time('work_begin');
            $table->time('work_end');
            $table->timestamps();

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
        Schema::connection('hrm')->dropIfExists('free_days');
        Schema::connection('hrm')->dropIfExists('configs');
        //
    }
}
