<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateGraveyardsTable extends Migration
    {
        public function up()
        {
            Schema::create('graveyards', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('location');
                $table->decimal('latitude', 10, 8);
                $table->decimal('longitude', 11, 8);
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('graveyards');
        }
    }
?>