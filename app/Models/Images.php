<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Images extends Model
{
    protected $table = "images";
    protected $guarded = ["id"];
    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class, "tag_id");
    }
}
