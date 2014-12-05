<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CoursesTableSeeder extends Seeder {

	public function run()
	{
//        $course_type = Course_type::find(6);
//        dd($course_type->parentType->first()->name);
        $first_level_course_types = Course_type::where('parent_id', '=', 'NULL')->get();
        $instructors = Instructor::all();
        $number_of_instructors = $instructors->count();

        $number_of_courses = Course::all()->count();
        $next_number_of_courses = $number_of_courses + 1;

        $start_datetime_array = [ '2014-12-15 08:00:00',
                                '2014-12-15 09:00:00',
                                '2014-12-15 10:00:00',
                                '2014-12-16 08:00:00',
                                '2014-12-16 09:00:00',
                                '2014-12-16 10:00:00',
                                '2014-12-17 08:00:00',
                                '2014-12-17 09:00:00',
                                '2014-12-17 10:00:00',
                                '2014-12-18 08:00:00',
                                '2014-12-18 09:00:00',
                                '2014-12-18 10:00:00',
                                '2014-12-19 08:00:00',
                                '2014-12-19 09:00:00',
                                '2014-12-19 10:00:00', ];

        $number_of_start_datetime_array = count($start_datetime_array);

        $duration_array = [ 30,
                            60,
                            90,
                            120,
                            150,
                            180, ];

        $number_of_duration_array = count($duration_array);

        $running_days_array = [ 1, 2, 3, 4, 5, 6, 7 ];

        $all_students = Student::all()->toArray();

        for ($count = 1; $count <= 200; $count++, $next_number_of_courses++) {

            // rand date for starting date
            $start_datetime = $start_datetime_array[mt_rand(0, $number_of_start_datetime_array - 1)];

            // rand duration of the course
            $duration = $duration_array[mt_rand(0, $number_of_duration_array - 1)];

            // rand date for ending date
            // and will add duration
            $end_datetime = date("Y-m-d H:i:s", strtotime('+' . mt_rand(30, 90) . ' days ' . $duration . ' minutes', strtotime($start_datetime)));

            // randomize the running days
            $shuffled_array = $running_days_array;
            shuffle($shuffled_array);
            $shuffled_array = array_slice($shuffled_array, 0, mt_rand(1, 7));
            asort($shuffled_array);

            $running_days = '';

            foreach ($shuffled_array as $element) {
                $running_days = $running_days . $element . ',';
            }

            $running_days = substr($running_days, 0, -1);

            $course = Course::create([
                'name' => '테스트 클래스' . $next_number_of_courses,
                'instructor_id' => mt_rand(1, $number_of_instructors),
                'start_datetime' => $start_datetime,
                'duration' => $duration,
                'end_datetime' => $end_datetime,
                'running_days' => $running_days,
            ]);

            // generating running courses automatically based on start & end datetime
            $start_date = strtotime($start_datetime);
            $end_date = strtotime($end_datetime);
            for ($date = $start_date; $date <= $end_date; $date += 60 * 60 * 24) {
                foreach ($shuffled_array as $element) {
                    if (strftime('%w', $date) == ($element % 7)) {
                        $dates[] = strftime('%Y-%m-%d %T', $date);
                    }
                }
            }
            sort($dates);

//            dd($dates);

            $course->total_number_of_sessions = count($dates);

            $course->status = '미 진행';

            $course->save();

            $session_count = 1;

            foreach ($dates as $planned_start_datetime) {
                Running_course::create([
                    'course_id' => $course->id,
                    'session_number' => $session_count,
                    'planned_start_datetime' => $planned_start_datetime,
                    'planned_end_datetime' => date("Y-m-d H:i:s", strtotime('+' . $duration . ' minutes', strtotime($planned_start_datetime))),
                    'status' => '미 진행',
                ]);

                $session_count++;
            }

            $shuffled_students_array = $all_students;
            shuffle($shuffled_students_array);

            $number_of_attending_students = mt_rand(6, 15);

            for ($i = 0; $i < $number_of_attending_students; $i++) {
                $course->attendingStudents()->attach($shuffled_students_array[$i]['id']);
            }

            unset($dates);

            echo ($count.'/');
        }

	}

    function randomDate($start_date, $end_date)
    {
        // Convert to timetamps
        $min = strtotime($start_date);
        $max = strtotime($end_date);

        // Generate random number using above bounds
        $val = rand($min, $max);

        // Convert back to desired date format
        return date('Y-m-d H:i:s', $val);
    }

}