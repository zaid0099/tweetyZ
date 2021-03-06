<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function timeline()
    {
        // ----1---- just Current User
        // return Tweet::where('user_id', $this->id)->latest()->get();

        // ----2---- Curnnet user and Following.
        // $ids = $this->follows()->pluck('id');
        // $ids->push($this->id);
        // return Tweet::whereIn('user_id', $ids)->latest()->get();

        // ----3---- Curnnet user and Following.
        $follower = $this->follows()->pluck('id');
        return Tweet::whereIn('user_id', $follower)
            ->orwhere('user_id', $this->id)
            ->withLikes()
            ->latest()
            ->paginate(10);
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class)->latest();
    }

    public function getAvatarAttribute($value)
    {
        // return "https://i.pravatar.cc/200?u=" . $this->email;
        return asset($value ?: "https://i.pravatar.cc/200?u=" . $this->email);
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    // public function getRouteKeyName()
    // {
    //     return 'name';
    // }

    public function path($append = '')
    {
        $path =  route('profile', $this->userName);

        return $append ? "{$path}/{$append}" : $path;
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
