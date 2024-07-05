<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TowerData extends Model
{
    use HasFactory;

    protected $table = 'towerdatas';

    public function towertypes(): BelongsTo
    {
        return $this->belongsTo(Towertype::class, 'towertype_id');
    }

    public function towerfactory(): BelongsTo
    {
        return $this->belongsTo(TowerFactory::class, 'towerfactory_id');
    }
}
