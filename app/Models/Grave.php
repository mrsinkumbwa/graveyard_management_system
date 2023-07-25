<?php

    // app/Models/Grave.php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Grave extends Model
    {
        protected $fillable = ['graveyard_id', 'grave_number', 'is_booked', 'booking_date', 'burial_date', 'cost'];

        // Define the relationship with graveyard table
        public function graveyard()
        {
            return $this->belongsTo(Graveyard::class);
        }

        // Define the relationship with grave_category_mappings table
        public function graveCategoryMappings()
        {
            return $this->hasMany(GraveCategoryMapping::class);
        }

        // Define the relationship with bookings table
        public function bookings()
        {
            return $this->hasMany(Booking::class);
        }

        // Define the relationship with historical_burials table
        public function historicalBurials()
        {
            return $this->hasMany(HistoricalBurial::class);
        }
    }
?>