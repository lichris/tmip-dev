<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Role extends \Eloquent {

    protected $fillable = [ 'role_name', ];

    protected $table = 'roles';

    public $timestamps = false;

    public function getRoleName($id) {
        $role = Role::findOrFail($id);

        \App::error(function(ModelNotFoundException $e)
        {
            return \Response::make('Not Found', 404);
        });

        return $role->role_name;
    }

}