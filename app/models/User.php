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

    public function students() {
        return $this->hasMany('Student');
    }

    public function instructors() {
        return $this->hasMany('Instructor');
    }

    public function hrs() {
        return $this->hasMany('HR');
    }

    public function consultants() {
        return $this->hasMany('Consultant');
    }

    public function getRoleName() {
        $userRoleId = $this->role_id;
        $roleName = \Role::where('id', '=', $userRoleId)->firstOrFail()->role_name;
        return $roleName;
    }

    public function getNamedRoutePrefix() {
        $roleName = $this->getRoleName();
        $roleName = strtolower($roleName);
        return $roleName . 's';
    }
}