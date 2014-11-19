<?php

class Student extends \Eloquent {
	protected $fillable = [ 'user_id',
                            'student_is_employee_of_company_id',
                            'position',
                            'employee_number', ];

    public $timestamps = false;

    protected $table = 'students';
}