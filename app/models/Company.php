<?php

class Company extends \Eloquent {
	protected $fillable = [ 'name_kor',
                            'name_eng',
                            'address_kor',
                            'address_eng',
                            'contact_email',
                            'contact_number_1',
                            'contact_number_2',
                            'file_location_of_logo_img', ];

    protected $table = 'companies';

    public function employees() {
        return $this->hasMany('Student', 'company_id');
    }

    public function managers() {
        return $this->hasMany('HR', 'company_id');
    }
}