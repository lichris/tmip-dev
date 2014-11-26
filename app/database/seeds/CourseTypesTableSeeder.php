<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CourseTypesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

        /*
         * 1st categories
         */
        CourseType::create([
            'course_type_name' => '주재원',
            'select_multiple' => 'N',
        ]);
        CourseType::create([
            'course_type_name' => '이그제큐티브',
            'select_multiple' => 'N',
        ]);
        CourseType::create([
            'course_type_name' => '직무특화 만다린 스킬',
            'select_multiple' => 'Y',
        ]);
        CourseType::create([
            'course_type_name' => '비즈니스 만다린 스킬',
            'select_multiple' => 'Y',
        ]);
        CourseType::create([
            'course_type_name' => '일반 만다린 스킬',
            'select_multiple' => 'N',
        ]);


        /*
         * 2nd categories
         */
        // children of 직무특화 만다린 스킬
        CourseType::create([
            'course_type_name' => '금융',
            'parent_course_type_name' => '직무특화 만다린 스킬',
            'select_multiple' => 'N',
        ]);
        CourseType::create([
            'course_type_name' => '호텔',
            'parent_course_type_name' => '직무특화 만다린 스킬',
            'select_multiple' => 'N',
        ]);
        CourseType::create([
            'course_type_name' => '백화점',
            'parent_course_type_name' => '직무특화 만다린 스킬',
            'select_multiple' => 'N',
        ]);
        CourseType::create([
            'course_type_name' => '식품업',
            'parent_course_type_name' => '직무특화 만다린 스킬',
            'select_multiple' => 'N',
        ]);
        CourseType::create([
            'course_type_name' => '항공',
            'parent_course_type_name' => '직무특화 만다린 스킬',
            'select_multiple' => 'N',
        ]);
        CourseType::create([
            'course_type_name' => '무역',
            'parent_course_type_name' => '직무특화 만다린 스킬',
            'select_multiple' => 'N',
        ]);
        CourseType::create([
            'course_type_name' => '은행',
            'parent_course_type_name' => '직무특화 만다린 스킬',
            'select_multiple' => 'N',
        ]);
        CourseType::create([
            'course_type_name' => 'IT',
            'parent_course_type_name' => '직무특화 만다린 스킬',
            'select_multiple' => 'N',
        ]);


        // children of 비즈니스 만다린 스킬
        CourseType::create([
            'course_type_name' => 'Presentation',
            'parent_course_type_name' => '비즈니스 만다린 스킬',
            'select_multiple' => 'N',
        ]);
        CourseType::create([
            'course_type_name' => 'Writing',
            'parent_course_type_name' => '비즈니스 만다린 스킬',
            'select_multiple' => 'N',
        ]);
        CourseType::create([
            'course_type_name' => 'Negotiation',
            'parent_course_type_name' => '비즈니스 만다린 스킬',
            'select_multiple' => 'N',
        ]);
        CourseType::create([
            'course_type_name' => 'Meeting',
            'parent_course_type_name' => '비즈니스 만다린 스킬',
            'select_multiple' => 'N',
        ]);
        CourseType::create([
            'course_type_name' => '비즈니스 회화',
            'parent_course_type_name' => '비즈니스 만다린 스킬',
            'select_multiple' => 'N',
        ]);


        // children of 일반 만다린 스킬
        CourseType::create([
            'course_type_name' => '일반 회화',
            'parent_course_type_name' => '일반 만다린 스킬',
            'select_multiple' => 'N',
        ]);

        /*
         *
         */


        /*
         *
         */


        /*
         *
         */


        /*
         *
         */
	}

}