<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('teacher_id');
            $table->string('student1_name');
            $table->string('student2_name');
            $table->string('student3_name');
            $table->string('student1_email');
            $table->string('student2_email');
            $table->string('student3_email');
            $table->integer('student1_phone')->default(11);
            $table->integer('student2_phone')->default(11);
            $table->integer('student3_phone')->default(11);
            $table->integer('student1_batch')->default(3);
            $table->integer('student2_batch')->default(3);
            $table->integer('student3_batch')->default(3);
            $table->string('group_name')->nullable();
            $table->longText('topicsFor_booking')->nullable();
            $table->dateTime('booking_dateTime')->nullable();
            $table->integer('status_id')->default(1);  // 1 = Pending ,  2 = Approved, 3 = Rejected
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
        Schema::dropIfExists('bookings');
    }
}
