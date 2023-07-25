<?php
    // app/Models/ServiceProvider.php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class ServiceProvider extends Model
    {
        protected $fillable = ['user_id', 'business_name', 'business_address', 'profile_picture', 'cover_photo', 'bio', 'total_ratings', 'average_rating'];

        // Define the relationship with users table
        public function user()
        {
            return $this->belongsTo(User::class);
        }

        // Define the relationship with advertisements table
        public function advertisements()
        {
            return $this->hasMany(Advertisement::class);
        }

        // Define the relationship with bookings table
        public function bookings()
        {
            return $this->hasMany(Booking::class);
        }

        // Define the relationship with reviews table
        public function reviews()
        {
            return $this->hasMany(Review::class);
        }
    }
?>