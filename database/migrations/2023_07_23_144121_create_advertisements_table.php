<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateAdvertisementsTable extends Migration
    {
        public function up()
        {
            Schema::create('advertisements', function (Blueprint $table) {
                $table->id();
                $table->foreignId('service_provider_id')->constrained('service_providers');
                $table->string('title');
                $table->text('description')->nullable();
                $table->string('image')->nullable();
                $table->date('start_date')->nullable();
                $table->date('end_date')->nullable();
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('advertisements');
        }
    }
?>