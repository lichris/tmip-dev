<?php

class Student extends \Eloquent {
	protected $fillable = [ 'user_id',
                            'company_id',
                            'deputy',
                            'position', ];

    public $timestamps = false;

    protected $table = 'students';

    public function user() {
        return $this->belongsTo('User', 'user_id');
    }

    public function employeeOf() {
        return $this->belongsTo('Company', 'company_id');
    }

    public function attendingCourses() {
        return $this->belongsToMany('Course',
                                    'students_attend_courses',
                                    'student_id',
                                    'course_id')
                                    ->withPivot('late_sessions', 'absented_sessions', 'comments_by_instructor');
    }
}