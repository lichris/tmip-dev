<?php

class ClassType extends \Eloquent {

    protected $fillable = [ 'class_type_name', ];

    protected $table = 'class_types';

    public $timestamps = false;

}