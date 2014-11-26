<?php

namespace MandarinProjects\Trinity\Students\Controllers;

class PagesController extends \BaseController {


    function __construct()
    {
        $currentUser = \Auth::user();
        $currentStudent = \Student::where('id', '=', $currentUser->id)->firstOrFail();
        $currentStudentIsEmployeeOf = \Company::find($currentStudent->employee_of_company_id);
        \View::share('currentUser', $currentUser);
        \View::share('currentStudent', $currentStudent);
        \View::share('currentStudentIsEmployeeOf', $currentStudentIsEmployeeOf);
    }

    public function showMyClass() {
        return \View::make('TrinityStudentsViews::Pages.showMyClass');
    }

    public function showMyProfile() {
        return \View::make('TrinityStudentsViews::Pages.showMyProfile');
    }

    public function showIndividually() {
        return 'showIndividually';
    }

    public function showLevelTest() {
        return 'showLevelTest';
    }

    public function participate() {
        return 'participate';
    }

    public function showResults() {
        return 'showResults';
    }

    public function showComprehensiveEvaluation() {
        return 'showComprehensiveEvaluation';
    }

    public function showManageMyClass() {
        return 'showManageMyClass';
    }

    public function showAbsenceManagement() {
        return 'showAbsenceManagement';
    }

    public function showCommunity() {
        return 'showCommunity';
    }

    public function showGuestBook () {
        return 'showGuestBook';
    }

    public function showBoard () {
        return 'showBoard';
    }

    public function showBulletin () {
        return 'showBulletin';
    }

    public function showLearningMaterials () {
        return 'showLearningMaterials';
    }

    public function showAssignment () {
        return 'showAssignment';
    }

    public function showMySchedule() {
        return 'showMySchedule';
    }

}