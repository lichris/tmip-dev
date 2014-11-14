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
                            'user_has_permission_of_role_id',
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

    public function getNamedRoutePrefix() {
        $userPermission = $this->user_has_permission_of_role_id;
        $roleOfCurrentUser = \Role::where('id', '=', $userPermission)->firstOrFail()->role_name;

        if ($roleOfCurrentUser == 'Administrator') {
            return 'admins';
        }
        if ($roleOfCurrentUser == 'Consultant') {
            return 'consultants';
        }
        if ($roleOfCurrentUser == 'Student') {
            return 'students';
        }
        if ($roleOfCurrentUser == 'Instructor') {
            return 'instructors';
        }
        if ($roleOfCurrentUser == 'HR') {
            return 'hrs';
        }
        if ($roleOfCurrentUser == 'Secretary') {
            return 'secretaries';
        }
        if ($roleOfCurrentUser == 'Executive') {
            return 'executives';
        }
        return 'unknown';
    }

}