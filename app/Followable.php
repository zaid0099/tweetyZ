<?php


namespace App;

trait Followable
{
    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function following(User $user)
    {
        // return $this->follows->contains($user); //Old 1
        return $this->follows()->where('following_user_id', $user->id)->exists(); //New 1
    }

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    public function unFollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function toggleFollow(User $user)
    {
        // current_user()->follow($user);
        if (current_user()->following($user)) {
            return current_user()->unFollow($user);
        }

        return current_user()->follow($user);
    }
}
