<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TowerType extends Model
{
    use HasFactory;

    protected $table = 'towertypes';

    public function towerdatas(): HasMany
    {
        return  $this->hasMany(TowerData::class);
    }
}
