<?php


class CompaniesTableSeeder extends Seeder {

	public function run()
	{

        Company::create([
            'company_name' => 'The Corporation',
            'address_kor' => '서울특별시 영등포구 여의도동 국제금융로 10, Two IFC 22층 주식회사 The Corporation',
            'address_eng' => 'Level 22, International Finance Centre, Two IFC, 10 Gukjegeumyung-ro,
                                Yeongdeungpo-gu, Seoul, South Korea',
            'contact_email' => 'contact@thecorporation.co.kr',
            'contact_number_1' => '07049499090',
            'contact_number_2' => '07049499091'
        ]);
        Company::create([
            'company_name' => 'The Mandarin',
            'address_kor' => '서울특별시 영등포구 여의도동 국제금융로 10, Two IFC 22층 주식회사 The Corporation',
            'address_eng' => 'Level 22, International Finance Centre, Two IFC, 10 Gukjegeumyung-ro,
                                Yeongdeungpo-gu, Seoul, South Korea',
            'contact_email' => 'contact@themandarin.co.kr',
            'contact_number_1' => '07049499090',
            'contact_number_2' => '07049499091'
        ]);
        Company::create([
            'company_name' => 'Test Company',
            'address_kor' => '안녕하세요 나는 주소따위 없습니다',
            'address_eng' => 'no where on Earth',
            'contact_email' => 'test@do.not.contact',
            'contact_number_1' => '01069691818',
            'contact_number_2' => '01069692828'
        ]);
	}

}