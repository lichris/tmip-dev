<?php

class TestTableSeeder extends Seeder {

	public function run()
	{
        $temp = Student::find(1)->employeeOf;
        echo ($temp->name_kor);
//        $attending_courses = $temp->attendingCourses;
//
//        foreach ($attending_courses as $course) {
//            echo ($course->name.'/');
//        }
	}

}