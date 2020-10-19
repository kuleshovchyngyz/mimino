<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();

            $table->string('organization_type')->nullable();
            $table->string('name')->nullable();

            $table->string('contract_number')->nullable();
            $table->string('contract_form')->nullable();
            $table->timestamp('contract_date')->nullable();

            $table->foreignId('manager_id')->nullable();

            $table->integer('rank')->default(0)->nullable();
            $table->boolean('is_active')->default(true);

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
        Schema::dropIfExists('organizations');
    }
}
