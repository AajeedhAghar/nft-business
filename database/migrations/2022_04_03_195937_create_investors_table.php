<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->integer('country_code')->nullable();
            $table->integer('phone')->nullable();
            $table->string('interests')->nullable();
            $table->string('investor_role')->nullable();
            $table->text('industries')->nullable();
            $table->text('interested_locations')->nullable();
            $table->integer('investment_min')->nullable();
            $table->integer('investment_max')->nullable();
            $table->string('location')->nullable();
            // $table->decimal('latitude', $precision = 10, $scale = 2)->nullable();
            // $table->decimal('longitude', $precision = 10, $scale = 2)->nullable();
            $table->string('company_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('website')->nullable();
            // $table->string('company_logo')->nullable();
            $table->text('factors')->nullable();
            $table->text('company_description')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('business_proof_doc')->nullable();
            $table->string('terms_doc')->nullable();
            $table->string('current_plan_title')->nullable();
            $table->decimal('current_plan_price')->nullable();
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('user_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('investors');
    }
};
