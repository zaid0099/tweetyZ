<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;

trait Likable
{

    public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
            'select tweet_id, sum(liked) likes, sum(!liked) Dislikes from likes
            group by tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );
    }

    public function like($user = null, $liked = true)
    {
        $this->likes()->updateOrCreate(
            [
                'user_id' => $user ? $user->id  : auth()->id(),
            ],
            [
                'liked' => $liked,
            ]
        );
    }

    public function disLike($user)
    {
        $this->like($user, false);
    }

    public function isLikedBy(User $user)
    {
        // $this->likes()->where('user_id', $user->id)->exists();
        return (bool) $user->likes->where('tweet_id', $this->id)->where('liked', true)->count();
    }

    public function isDisLikedBy(User $user)
    {
        // $this->likes()->where('user_id', $user->id)->exists();
        return (bool) $user->likes->where('tweet_id', $this->id)->where('liked', false)->count();
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
