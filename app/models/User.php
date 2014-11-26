<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends \Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

    protected $fillable = [ 'user_name_kor',
                            'user_name_eng',
                            'user_email',
                            'password',
                            'role_id',
                            'private_email',
                            'gender',
                            'age',
                            'phone_number' ];

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