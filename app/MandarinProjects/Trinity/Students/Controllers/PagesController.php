<?php

namespace MandarinProjects\Trinity\Students\Controllers;

class PagesController extends \BaseController {

    private $currentUser;
    private $currentStudent;
    private $currentStudentIsEmployeeOf;

    function __construct()
    {
        $this->currentUser = \Auth::user();
        $this->currentStudent = $this->currentUser->student;
        $this->currentStudentIsEmployeeOf = $this->currentStudent->employeeOf;
        \View::share('currentUser', $this->currentUser);
    }

    public function showMyClass() {
        $attending_courses = $this->currentStudent->attendingCourses;

        return \View::make('TrinityStudentsViews::Pages.showMyClass')
                ->with('attending_courses', $this->currentStudent->attendingCourses);
    }

    public function showMyProfile() {
        return \View::make('TrinityStudentsViews::Pages.showMyProfile')
                ->with('currentStudent', $this->currentStudent)
                ->with('currentStudentIsEmployeeOf', $this->currentStudentIsEmployeeOf);
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