<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends \Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

    protected $fillable = [ 'account_email',
                            'password',
                            'name_kor',
                            'name_eng',
                            'role_id',
                            'private_email',
                            'phone_number',
                            'gender',
                            'age',
                            'file_location_of_profile_img', ];

	/**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
	protected $hidden = array('password', 'remember_token');

    public function role() {
        return $this->belongsTo('Role');
    }

    public function student() {
        return $this->hasOne('Student', 'user_id');
    }

    public function instructor() {
        return $this->hasOne('Instructor', 'user_id');
    }

    public function hr() {
        return $this->hasOne('HR', 'user_id');
    }

    public function Consultant() {
        return $this->hasOne('Consultant', 'user_id');
    }
}