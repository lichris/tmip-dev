<?php

class Course_type extends \Eloquent {
	protected $fillable = [ 'name',
                            'has_sub_types',
                            'can_select_multiple',
                            'parent_id', ];

    public $timestamps = false;

    protected $table = 'course_types';

    public function specializedInstructors() {
        return $this->belongsToMany('Instructor',
                                    'instructors_specialize_course_types',
                                    'course_type_id',
                                    'instructor_id');
    }

    public function coursesByTypes() {
        return $this->belongsToMany('Course',
                                    'courses_have_course_types',
                                    'course_type_id',
                                    'course_id');
    }

    public function subTypes() {
        return $this->hasMany('Course_type', 'parent_id');
    }

    public function parentType() {
        return $this->belongsTo('Course_type', 'parent_id');
    }
}