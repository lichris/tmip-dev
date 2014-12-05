<?php

class Course extends \Eloquent {
	protected $fillable = [ 'name',
                            'instructor_id',
                            'start_datetime',
                            'duration',
                            'end_datetime',
                            'running_days',
                            'total_number_of_sessions',
                            'status', ];

    protected $table = 'courses';

    public function courseTypes() {
        return $this->belongsToMany('Course_types',
                                    'courses_have_course_types',
                                    'course_id',
                                    'course_type_id');
    }

    public function attendingStudents() {
        return $this->belongsToMany('Student',
                                    'students_attend_courses',
                                    'course_id',
                                    'student_id')
                                    ->withPivot('late_sessions', 'absented_sessions', 'comments_by_instructor');
    }

    public function instructor() {
        return $this->belongsTo('Instructor', 'instructor_id');
    }
}