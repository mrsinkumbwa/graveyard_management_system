<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateGraveCategoriesTable extends Migration
    {
        public function up()
        {
            Schema::create('grave_categories', function (Blueprint $table) {
                $table->id();
                $table->string('name')->unique();
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('grave_categories');
        }
    }
?>