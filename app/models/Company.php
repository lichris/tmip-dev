<?php

class Company extends \Eloquent {
	protected $fillable = [ 'company_name',
                            'address_kor',
                            'address_eng',
                            'contact_email',
                            'contact_number_1',
                            'contact_number_2',
                            'lists_of_the_hrs_in_charge',
                            'logo_image_location', ];

    public $timestamps = false;
}