<?php

    // app/Models/Booking.php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Booking extends Model
    {
        protected $fillable = ['user_id', 'service_provider_id', 'grave_id', 'booking_date', 'total_amount', 'payment_status', 'refund_status', 'refund_amount'];

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

        // Define the relationship with grave table
        public function grave()
        {
            return $this->belongsTo(Grave::class);
        }
    }
?>