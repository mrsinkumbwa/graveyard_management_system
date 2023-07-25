<?php
    // app/Models/Advertisement.php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Advertisement extends Model
    {
        protected $fillable = ['service_provider_id', 'title', 'description', 'image', 'start_date', 'end_date'];

        // Define the relationship with service_provider table
        public function serviceProvider()
        {
            return $this->belongsTo(ServiceProvider::class);
        }
    }
?>