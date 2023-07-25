<?php

    // app/Models/GraveCategoryMapping.php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class GraveCategoryMapping extends Model
    {
        public $timestamps = false; // Disable timestamps for this model

        protected $fillable = ['grave_id', 'category_id'];

        // Define the relationship with grave table
        public function grave()
        {
            return $this->belongsTo(Grave::class);
        }

        // Define the relationship with grave_category table
        public function graveCategory()
        {
            return $this->belongsTo(GraveCategory::class, 'category_id');
        }
    }
?>