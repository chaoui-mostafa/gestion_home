<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ville extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'villes';

    // Specify the primary key if it doesn't follow Laravel's naming convention
    protected $primaryKey = 'ville_id';

    // Define the attributes that are mass assignable
    protected $fillable = [
        'nom_ville',
    ];

    // Define the relationship with the Home model
    public function homes()
    {
        return $this->hasMany(Home::class, 'ville_id', 'ville_id');
    }
}
