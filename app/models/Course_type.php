<?php

class Course_type extends \Eloquent {
	protected $fillable = [ 'name',
                            'can_select_multiple',
                            'parent_id', ];

    public $timestamps = false;

    public function specializedInstructors() {
        return $this->belongsToMany('Instructor',
                                    'instructors_specialize_course_types',
                                    'instructor_id',
                                    'course_type_id');
    }
}