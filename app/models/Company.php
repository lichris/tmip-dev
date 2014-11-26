<?php

class Company extends \Eloquent {
	protected $fillable = [ 'company_name_kor',
                            'company_name_eng',
                            'address_kor',
                            'address_eng',
                            'contact_email',
                            'contact_number_1',
                            'contact_number_2',
                            'list_of_hr_ids_in_charge_of',
                            'logo_img_filename', ];

    protected $table = 'companies';
}


//
//$table->increments('id');
//$table->string('company_name_kor')->unique();
//$table->string('company_name_eng')->nullable();
//$table->string('address_kor');
//$table->string('address_eng')->nullable();
//$table->string('contact_email')->nullable();
//$table->string('contact_number_1');
//$table->string('contact_number_2')->nullable();
//$table->string('list_of_hr_ids_in_charge_of')->nullable();
//$table->string('logo_img_filename')->nullable();
//$table->timestamps();