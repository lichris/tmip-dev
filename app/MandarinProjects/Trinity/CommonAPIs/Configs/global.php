<?php

use MandarinProjects\Trinity\CommonAPIs\Models\MenuElement as MenuElement;

View::composer('after_login.pages.sidebar', function($view) {

    $student_sidebar_menulist = array(

        new MenuElement('내 클래스', 'students.myClass', \Request::url(),
            array(
                new MenuElement('개별 보기', 'students.myClass.showIndividually', \Request::url()),
            )
        ),

        new MenuElement('레벨 테스트', 'students.levelTest', \Request::url(),
            array(
                new MenuElement('레벨 테스트 참여', 'students.levelTest.participate', \Request::url()),
                new MenuElement('결과보기', 'students.levelTest.showResults', \Request::url()),
            )
        ),

        new MenuElement('교육 종합평가', 'students.comprehensiveEvaluation', \Request::url()),

        new MenuElement('수업 관리', 'students.manageMyClass', \Request::url(),
            array(
                new MenuElement('결석 사유', 'students.manageMyClass.absenceManagement', \Request::url()),
            )),

        new MenuElement('커뮤니티', 'students.community', \Request::url(),
            array(
                new MenuElement('방명록', 'students.community.guestBook', \Request::url()),
                new MenuElement('게시판', 'students.community.board', \Request::url(),
                    array(
                        new MenuElement('공지사항', 'students.community.board.bulletin', \Request::url()),
                        new MenuElement('학습자료', 'students.community.board.learningMaterials', \Request::url()),
                        new MenuElement('과제', 'students.community.board.assignment', \Request::url()),
                    )),
            )
        ),

        new MenuElement('내 교육 스케줄', 'students.mySchedule', \Request::url()),

    );

    $view->with('menu_list', $student_sidebar_menulist);

});