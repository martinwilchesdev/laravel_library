<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;
    protected $fillable = ['country'];

    public function authors(): HasMany {
        return $this->hasMany(Author::class, 'country_id');
    }
}
