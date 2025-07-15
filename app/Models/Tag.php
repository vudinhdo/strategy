<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Images;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Tag extends Model
{
    protected $table = "tags";
    protected $guarded = ["id"];
    public function images(): HasMany
    {
        return $this->hasMany(Images::class, 'tag_id');
    }
}
