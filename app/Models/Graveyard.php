<?php
    // app/Models/Graveyard.php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Graveyard extends Model
    {
        protected $fillable = ['name', 'location', 'latitude', 'longitude'];

        // Define the relationship with graves table
        public function graves()
        {
            return $this->hasMany(Grave::class);
        }
    }
?>