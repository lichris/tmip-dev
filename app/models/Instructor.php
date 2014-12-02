<?php

class Instructor extends \Eloquent {
	protected $fillable = [ 'user_id',
                            'name_chn',
                            'date_of_birth',
                            'residence_number',
                            'bank_id',
                            'bank_account_number',
                            'payday', ];

    public $timestamps = false;

    public function user() {
        return $this->belongsTo('User');
    }

    public function bank() {
        return $this->belongsTo('Bank');
    }

    public function specializedOnCourseTypes() {
        return $this->belongsToMany('Course_type',
                                    'instructors_specialize_course_types',
                                    'course_type_id',
                                    'instructor_id');
    }

}