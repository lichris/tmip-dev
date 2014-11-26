<?php

class CourseType extends \Eloquent {
	protected $fillable = [ 'course_type_name',
                            'parent_course_type_name',
                            'select_multiple', ];
    protected $table = 'course_types';
    public $timestamps = false;
}