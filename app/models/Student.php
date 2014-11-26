<?php

class Student extends \Eloquent {
	protected $fillable = [ 'id',
                            'employee_of_company_id',
                            'deputy',
                            'position',
                            'employee_number', ];

    public $timestamps = false;

    protected $table = 'students';
}