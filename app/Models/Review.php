<?php

    // app/Models/Review.php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Review extends Model
    {
        protected $fillable = ['user_id', 'service_provider_id', 'rating', 'comment'];

        // Define the relationship with user table
        public function user()
        {
            return $this->belongsTo(User::class);
        }

        // Define the relationship with service_provider table
        public function serviceProvider()
        {
            return $this->belongsTo(ServiceProvider::class);
        }
    }
?>