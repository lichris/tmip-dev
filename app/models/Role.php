<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Role extends \Eloquent {

    protected $fillable = [ 'name', ];

    protected $table = 'roles';

    public $timestamps = false;

    public function usersByRole() {
        return $this->hasMany('User');
    }
}