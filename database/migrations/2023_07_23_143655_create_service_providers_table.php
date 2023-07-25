<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateServiceProvidersTable extends Migration
    {
        public function up()
        {
            Schema::create('service_providers', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained('users');
                $table->string('business_name');
                $table->string('business_address');
                $table->string('profile_picture')->nullable();
                $table->string('cover_photo')->nullable();
                $table->text('bio')->nullable();
                $table->integer('total_ratings')->default(0);
                $table->float('average_rating')->default(0.0);
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('service_providers');
        }
    }
?>