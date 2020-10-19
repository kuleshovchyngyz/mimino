<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable()->unique();
            $table->string('phone')->nullable()->unique();
            $table->string('email')->nullable()->unique();

            $table->foreignId('status_id')->nullable();

            $table->string('registered_by')->nullable();
            $table->string('patented_by')->nullable();
            $table->string('insured_by')->nullable();

            $table->timestamp('registered_at')->nullable();
            $table->timestamp('patented_at')->nullable();
            $table->timestamp('insured_at')->nullable();
            $table->timestamp('accepted_at')->nullable();
            $table->timestamp('dismissed_at')->nullable();

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
        Schema::dropIfExists('employees');
    }
}
