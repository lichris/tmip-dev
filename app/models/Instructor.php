<?php

class Instructor extends \Eloquent {
	protected $fillable = [ 'id',
                            'user_name_chn',
                            'list_of_handling_classes',
                            'date_of_birth',
                            'bank_name',
                            'bank_account_number',
                            'specialized_on_course_type_id',
                            'payday', ];
    public $timestamps = false;
}