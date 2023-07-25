<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateGravesTable extends Migration
    {
        public function up()
        {
            Schema::create('graves', function (Blueprint $table) {
                $table->id();
                $table->foreignId('graveyard_id')->constrained('graveyards');
                $table->string('grave_number');
                $table->boolean('is_booked')->default(false);
                $table->date('booking_date')->nullable();
                $table->date('burial_date')->nullable();
                $table->decimal('cost', 10, 2)->nullable();
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('graves');
        }
    }
?>