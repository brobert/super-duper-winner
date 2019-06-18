<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class NpkWorklog extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $this->down();

        Schema::connection('npk')->create('configs', function (Blueprint $table)
        {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->string('attr')->primary();
            $table->string('value_json', 255)->nullable();
            $table->timestamps();
        });

        Schema::connection('npk')->create('free_days', function (Blueprint $table)
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

        Schema::connection('npk')->create('work_types', function (Blueprint $table)
        {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->increments('id');
            $table->string('name', 50);
            $table->timestamps();
        });

        Schema::connection('npk')->create('work_logs', function (Blueprint $table)
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

        Schema::connection('npk')->dropIfExists('work_logs');
        Schema::connection('npk')->dropIfExists('work_types');
        Schema::connection('npk')->dropIfExists('free_days');
        Schema::connection('npk')->dropIfExists('configs');
        //
    }
}
