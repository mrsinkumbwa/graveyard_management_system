<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateGraveCategoryMappingsTable extends Migration
    {
        public function up()
        {
            Schema::create('grave_category_mappings', function (Blueprint $table) {
                $table->foreignId('grave_id')->constrained('graves');
                $table->foreignId('category_id')->constrained('grave_categories');
                $table->primary(['grave_id', 'category_id']);
            });
        }

        public function down()
        {
            Schema::dropIfExists('grave_category_mappings');
        }
    }
?>