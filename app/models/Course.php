<?php

class Course extends \Eloquent {
	protected $fillable = [ 'course_name',
                            'course_type_id',
                            'list_of_course_members',
                            'run_by_instructor_id',
                            'running_for_company_id',
                            'running_on_date',
                            'starts_on',
                            'started_on',
                            'ends_on',
                            'ended_on',
                            'starts_at',
                            'started_at',
                            'ends_at',
                            'ended_at', ];

    protected $table = 'courses';
}