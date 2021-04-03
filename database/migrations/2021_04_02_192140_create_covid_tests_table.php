<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covid_tests', function (Blueprint $table) {
            $table->id();
            $table->string('patientName');
            $table->string('email');
            $table->string('testCenter');
            $table->enum('testType', ['Rapid Test', 'Swab Test', 'PCR Test']);
            $table->string('date');
            $table->longText('symptoms')->nullable();
            $table->string('testerName')->nullable();
            $table->enum('status', ['Wait for Approval', 'Accepted', 'Rejected', 'Completed'])->nullable();
            $table->enum('result', ['Returnee', 'Quarantined', 'Close Contact', 'Infected', 'Suspected'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('covid_tests');
    }
}