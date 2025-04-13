<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'types';

    // Specify the primary key if it doesn't follow Laravel's naming convention
    protected $primaryKey = 'type_id';

    // Define the attributes that are mass assignable
    protected $fillable = [
        'nom_type',
    ];

    // Define the relationship with the Home model
    public function homes()
    {
        return $this->hasMany(Home::class, 'type_id', 'type_id');
    }
}
