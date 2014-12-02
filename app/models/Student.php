<?php

class Student extends \Eloquent {
	protected $fillable = [ 'user_id',
                            'employee_of_company_id',
                            'deputy',
                            'position', ];

    public $timestamps = false;

    protected $table = 'students';

    public function user() {
        return $this->belongsTo('User');
    }

    public function employeeOf() {
        return $this->belongsTo('Company');
    }
}