<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userprofiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->date('b_date')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('religion')->nullable();
            $table->string('status')->nullable();
            $table->string('profession')->nullable();
            $table->string('school')->nullable();
            $table->string('college')->nullable();
            $table->string('university')->nullable();
            $table->string('subject')->nullable();
            $table->string('height')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('gender')->nullable();
            $table->string('weight')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('drink')->nullable();
            // $table->string('diet')->nullable();
            $table->string('smoke')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('annual_income')->nullable();
            $table->string('fathers_occupation')->nullable();
            $table->string('mothers_occupation')->nullable();
            $table->string('no_of_brother')->nullable();
            $table->string('no_of_sister')->nullable();
            $table->string('imagePath')->nullable();
            $table->string('imagePath1')->nullable();
            $table->string('imagePath2')->nullable();
            $table->string('imagePath3')->nullable();
            $table->string('p_country')->nullable();
            $table->string('p_state')->nullable();
            $table->string('p_city')->nullable();
            $table->string('p_religion')->nullable();
            $table->string('p_status')->nullable();
            $table->string('p_profession')->nullable();
            $table->string('p_gender')->nullable();
            $table->string('from_age')->nullable();
            $table->string('to_age')->nullable();
            $table->text('comment')->nullable();
            $table->integer('age')->nullable();
            $table->boolean('is_editor')->default(false);
            $table->string('created_at')->nullable();
            $table->string('created_by')->nullable();
            $table->integer('blur')->default(false);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userprofiles');
    }
}