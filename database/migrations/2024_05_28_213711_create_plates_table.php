<?php

use App\Models\Insurance;
use App\Models\User;
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
            $table->string('vin',17);
            $table->string('plate',20);
            $table->string('date_issue',20)->nullable();
            $table->string('date_exp',20)->nullable();
            $table->char('days',3)->nullable();
            $table->string('seller',60);
            $table->string('dealer_number',15);
            $table->string('make',60)->nullable();
            $table->string('model',60)->nullable();
            $table->char('year',4)->nullable();
            $table->string('body_style',3)->nullable();
            $table->string('major_color',60)->nullable();
            $table->string('minor_color',60)->nullable();
            $table->string('name1',45)->nullable();
            $table->string('name2',45)->nullable();
            $table->string('address',45)->nullable();
            $table->string('city',60)->nullable();
            $table->char('state',2)->nullable();
            $table->char('zip',6)->nullable();
            $table->string('email',60)->nullable();
            $table->string('phone',15)->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('insurance_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('insurance_id')->references('id')->on('insurances')->onDelete('set null');
            $table->char('status',1)->default('A');
            $table->timestamps();
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
