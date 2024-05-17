<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserProfile extends Model
{
    use HasFactory;

    protected $table = 'user_profile';

    protected $guarded = [];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function getEntryByUserId($user_id)
    {
        return self::query()->where('user_id', $user_id)->first();
    }

    public static function createInitial($user)
    {
        $user_profile = new self();
        $user_profile->full_name = $user->name;
        $user_profile->bio = 'Your Bio';
        $user_profile->avatar_url = 'img/avatar/man.jpg';
        $user_profile->user_id = $user->id;

        $user_profile->save();
    }
}
