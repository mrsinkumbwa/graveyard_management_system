<?php

    // app/Models/GraveCategory.php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class GraveCategory extends Model
    {
        protected $fillable = ['name'];

        // Define the relationship with grave_category_mappings table
        public function graveCategoryMappings()
        {
            return $this->hasMany(GraveCategoryMapping::class);
        }
    }
?>
