<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no');
            $table->text('sender_details')->nullable();
            $table->text('receiver_details')->nullable();
            $table->string('origin')->nullable();
            $table->string('destination')->nullable();
            $table->string('pickup_date')->nullable();
            $table->string('pickup_time')->nullable();
            $table->string('booking_mode')->nullable();
            $table->string('shipment_type')->nullable();
            $table->string('products')->nullable();
            $table->unsignedInteger('quantity')->nullable();
            $table->string('weight')->nullable();
            $table->string('value')->nullable();
            $table->string('delivery_cost')->nullable();
            $table->string('insurance')->nullable();
            $table->string('payment_mode')->nullable();
            $table->string('exp_delivery_date')->nullable();
            $table->string('comments')->nullable();
            $table->unsignedInteger('progress')->nullable();
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
        Schema::dropIfExists('invoices');
    }
}
