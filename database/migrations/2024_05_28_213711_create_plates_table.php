<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('plates', function (Blueprint $table) {
            $table->id();
            $table->integer('vin');
            $table->timestamp('sale_date')->useCurrent();
            $table->char('days',3);
            $table->string('seller',60);
            $table->year('dealer_number');
            $table->string('make',60);
            $table->string('model',60);
            $table->char('year',4);
            $table->string('body_style',3);
            $table->integer('major_color');
            $table->integer('minor_color')->nullable();
            $table->float('weight',8,2);
            $table->string('name1',45);
            $table->string('name2',45);
            $table->string('address',45);
            $table->string('city',60);
            $table->char('state',2);
            $table->char('zip',6);
            $table->string('email',60);
            $table->string('phone',15);
            $table->string('insurence',45);
            $table->unsignedBigInteger('user_id');
            $table->char('status',1)->default('A');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plates');
    }
};
