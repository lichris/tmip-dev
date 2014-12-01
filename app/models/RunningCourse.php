<?php

class RunningCourse extends \Eloquent {
	protected $fillable = [ 'course_id',
                            'session_number',
                            'start_time_planned',
                            'started_at',
                            'ended_at',
                            'duration',
                            'is_canceled', ];

    protected $table = 'running_courses';
}