<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateReviewsTable extends Migration
    {
        public function up()
        {
            Schema::create('reviews', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained('users');
                $table->foreignId('service_provider_id')->constrained('service_providers');
                $table->integer('rating')->nullable();
                $table->text('comment')->nullable();
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('reviews');
        }
    }
?>