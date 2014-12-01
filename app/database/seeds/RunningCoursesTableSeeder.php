<?php

class RunningCoursesTableSeeder extends Seeder {

    public function run()
    {
        $created_course_list = Course::all();
        foreach($created_course_list as $created_course) {
            $current_course_id = $created_course->id;
            $starts_on_date = strtotime($created_course->starts_on);
            $ends_on_date = strtotime($created_course->ends_on);
            $starts_at_time = date("h:i:s", strtotime($created_course->starts_at));
            $running_date = $created_course->running_date;
            $running_date = explode(',', $running_date);
            $running_date_count = count($running_date);

            var_dump($running_date);

            for ($date = $starts_on_date; $date <= $ends_on_date; $date += 60 * 60 * 24)
            {
                for ($i = 0; $i < $running_date_count; $i++) {
                    if ( strftime('%w', $date) == $running_date[$i] )
                    {
                        $dates[] = strftime('%Y-%m-%d', $date);
                    }
                }

            }
            sort($dates);
            //var_dump($dates);

            $session_count = 1;
            foreach($dates as $date) {
                RunningCourse::create([
                    'course_id' => $current_course_id,
                    'session_number' => $session_count,
                    'start_time_planned' => ''.$date.' '.$starts_at_time,
                ]);
                $session_count++;
                //echo (''.$date.' '.$starts_at_time);
            }

            unset($dates);
        }
    }

}