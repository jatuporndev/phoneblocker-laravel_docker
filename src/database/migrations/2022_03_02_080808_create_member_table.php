<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('email', 100);
            $table->string('username', 50);
            $table->string('password', 50);
            $table->integer('package');
            $table->string('free_trial', 50);
            $table->timestamps()->default('current_timestamp()');
            $table->timestamp('delete_at')->nullable();
            $table->date('exp_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member');
    }
}
