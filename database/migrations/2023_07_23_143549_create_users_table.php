<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateUsersTable extends Migration
    {
        public function up()
        {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->foreignId('role_id')->constrained();
                $table->string('first_name');
                $table->string('last_name');
                $table->string('email')->unique();
                $table->string('phone_number')->unique();
                $table->string('password');
                $table->boolean('is_verified')->default(false);
                $table->string('verification_code')->nullable();
                $table->integer('total_flags')->default(0);
                $table->boolean('is_blacklisted')->default(false);
                $table->string('language_preference', 10)->nullable();
                $table->json('notification_settings')->nullable();
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('users');
        }
    }
?>