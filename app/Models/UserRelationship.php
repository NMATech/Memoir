<?php

namespace App\Models;

use App\Enums\Relationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserRelationship extends Model
{
    use HasFactory;

    protected $table = 'user_relationships';

    protected $guarded = [];

    public function toUser() : BelongsTo
    {
        return $this->belongsTo(User::class, 'to');
    }


    public static function unfollow($from, $to)
    {
        $relationshipInv = self::query()->where('from', $to)->where('to', $from)->first();
        if($relationshipInv) {
            if ($relationshipInv->status != Relationship::BLOCKED->value) $relationshipInv->status = Relationship::FOLLOWING;
            $relationshipInv->save();
        }

        $relationship = self::query()->where('from', $from)->where('to', $to)->first();
        $relationship->delete();
    }
}
