<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateHistoricalBurialsTable extends Migration
    {
        public function up()
        {
            Schema::create('historical_burials', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained('users');
                $table->foreignId('grave_id')->constrained('graves');
                $table->date('burial_date')->nullable();
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('historical_burials');
        }
    }
?>