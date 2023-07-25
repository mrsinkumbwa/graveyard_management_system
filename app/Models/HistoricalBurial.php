<?php

    // app/Models/HistoricalBurial.php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class HistoricalBurial extends Model
    {
        protected $fillable = ['user_id', 'grave_id', 'burial_date'];

        // Define the relationship with user table
        public function user()
        {
            return $this->belongsTo(User::class);
        }

        // Define the relationship with grave table
        public function grave()
        {
            return $this->belongsTo(Grave::class);
        }
    }
?>