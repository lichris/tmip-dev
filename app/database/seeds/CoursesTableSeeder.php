<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CoursesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 5) as $index) {

            $list_of_students = Student::all();
            $student_id_min = $list_of_students[0]->id;
            $student_id_max = $list_of_students[$list_of_students->count() - 1]->id;

            $list_of_instructors = Instructor::all();
            $instructor_id_min = $list_of_instructors[0]->id;
            $instructor_id_max = $list_of_instructors[$list_of_instructors->count() - 1]->id;

            $course_type_id = CourseType::where('course_type_name', '=', '주재원')->firstOrFail()->id;

            $list_of_members = '';

            $temp = range($student_id_min, $student_id_max);
            shuffle($temp);
            $data = array_slice($temp, 0, rand(1, $student_id_max - $student_id_min));

            foreach($data as $element) {
                $list_of_members = $list_of_members.$element.',';
            }

			Course::create([
                'course_name' => '주재원 과정'.$index,
                'course_type_id' => $course_type_id,
                'list_of_course_members' => $list_of_members,
                'run_by_instructor_id' => rand($instructor_id_min, $instructor_id_max),
                'running_for_company_id' => rand(1, 10),
                'running_date' => '1,3,5',
                'starts_on' => '2014-12-12',
                'ends_on' => '2015-03-12',
                'starts_at' => '09:00:00',
                'ends_at' => '11:00:00',
			]);
		}
	}

}