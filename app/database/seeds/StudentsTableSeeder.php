<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class StudentsTableSeeder extends Seeder {

	public function run()
	{
//        $role_id = Role::where('role_name', '=', 'Student')->firstOrFail()->id;
//        $students = User::where('role_id', '=', $role_id)->get();
//        foreach($students as $student)
//        {
//            Student::create([
//                'id' => $student->id,
//                'employee_of_company_id' => rand(1, 10),
//                'position' => '차장',
//                'employee_number' => '123456'
//            ]);
//        }

        $course_lists = Course::all();
        foreach ($course_lists as $course) {
            $member_ids = $course->list_of_course_members;
            $length_of_member_ids = strlen($member_ids);
            if ($member_ids[$length_of_member_ids - 1] == ',') {
                $member_ids = substr($member_ids, 0, -1);
            }
            $member_ids = explode(',', $member_ids);
            //dd($member_ids);
            foreach ($member_ids as $member_id) {
//                echo ('1');
                $student = Student::find($member_id);
//                echo ('2');
                $list_of_attending_courses = $student->list_of_attending_courses;
//                echo ('3');
                $list_of_attending_courses = $list_of_attending_courses.$course->id.',';
//                echo ('4');
                $student->list_of_attending_courses = $list_of_attending_courses;
                $student->save();
                //$student->update(array('list_of_attending_courses' => $list_of_attending_courses));
//                echo ('end');
            }
        }
	}

}