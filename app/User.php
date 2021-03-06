<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, HasRoles;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function getQuestions()
    {
        return $this->hasMany('App\Question','creator_id');
    }

    public function getVotes()
    {
        return $this->hasMany('App\Vote');
    }

    public function posts()
    {
         return $this->hasMany('App\Post');
    }
    public function scores()
    {
         return $this->hasMany('App\Score');
    }
    public function tasks()
    {
        return $this->belongsToMany('App\Task')->withTimestamps();
    }

    public function verticals()
    {
        return $this->belongsToMany('App\Vertical')->withTimestamps();
    }

    // Creating User in Tinker 
    // $y['username'] = value ; 
    // User::create($y);
}
