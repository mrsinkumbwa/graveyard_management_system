<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateBookingsTable extends Migration
    {
        public function up()
        {
            Schema::create('bookings', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained('users');
                $table->foreignId('service_provider_id')->constrained('service_providers');
                $table->foreignId('grave_id')->constrained('graves');
                $table->date('booking_date')->nullable();
                $table->decimal('total_amount', 10, 2)->nullable();
                $table->enum('payment_status', ['pending', 'paid', 'failed']);
                $table->enum('refund_status', ['not_requested', 'pending', 'refunded']);
                $table->decimal('refund_amount', 10, 2)->nullable();
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('bookings');
        }
    }
?>