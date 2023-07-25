<?php
    // app/Models/Role.php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Role extends Model
    {
        protected $fillable = ['name'];

        // Define the relationship with users table
        public function users()
        {
            return $this->hasMany(User::class);
        }
    }
?>