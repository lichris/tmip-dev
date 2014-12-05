<?php

class Running_course extends \Eloquent {
	protected $fillable = [ 'course_id',
                            'session_number',
                            'planned_start_datetime',
                            'planned_end_datetime',
                            'actual_start_datetime',
                            'actual_end_datetime',
                            'status',
                            'is_canceled',
                            'canceled_datetime',
                            'cancel_type',
                            'is_rearranged',
                            'rearranged_course_id', ];

    protected $table = 'running_courses';
}