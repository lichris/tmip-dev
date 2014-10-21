<?php

class Student extends \Eloquent {
	protected $fillable = ['student_name', 'password', 'email', 'phone_number', 'role_name'];
}