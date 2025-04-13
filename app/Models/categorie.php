<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'categories';

    // Specify the primary key if it doesn't follow Laravel's naming convention
    protected $primaryKey = 'categorie_id';

    // Define the attributes that are mass assignable
    protected $fillable = [
        'nom_category',
    ];

    // Define the relationship with the Home model
    public function homes()
    {
        return $this->hasMany(Home::class, 'categorie_id', 'categorie_id');
    }
}
