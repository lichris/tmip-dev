<?php

use MandarinProjects\Trinity\CommonAPIs\Models\MenuElement as MenuElement;

\View::composer('TrinityCommonViews::Layouts.Partials.sidebar', function($view) {

    $student_sidebar_menu_list = array(
        new MenuElement('내 클래스', 'trinity.Student.myClass',
            'fa fa-th-large', \Request::url(),
            array(
                new MenuElement('전체 보기', 'trinity.Student.myClass.showMyClass', '', \Request::url()),
                new MenuElement('개별 보기', 'trinity.Student.myClass.showIndividually', '', \Request::url()),
            )
        ),
        new MenuElement('레벨 테스트', 'trinity.Student.levelTest', 'fa fa-list', \Request::url(),
            array(
                new MenuElement('레벨 테스트 참여', 'trinity.Student.levelTest.showLevelTest', '', \Request::url()),
                new MenuElement('결과보기', 'trinity.Student.levelTest.showResults', '', \Request::url()),
            )
        ),
        new MenuElement('교육 종합평가', 'trinity.Student.comprehensiveEvaluation', 'fa fa-line-chart', \Request::url()),
        new MenuElement('수업 관리', 'trinity.Student.manageMyClass', 'fa fa-check-square-o', \Request::url(),
            array(
                new MenuElement('결석 사유', 'trinity.Student.manageMyClass.showAbsenceManagement', '', \Request::url()),
            )),
        new MenuElement('커뮤니티', 'trinity.Student.community', 'fa fa-users', \Request::url(),
            array(
                new MenuElement('커뮤니티 전체보기', 'trinity.Student.community.showCommunity', '', \Request::url()),
                new MenuElement('방명록', 'trinity.Student.community.showGuestBook', '', \Request::url()),
                new MenuElement('게시판', 'trinity.Student.community.showBoard', '', \Request::url(),
                    array(
                        new MenuElement('공지사항', 'trinity.Student.community.board.showBulletin', '', \Request::url()),
                        new MenuElement('학습자료', 'trinity.Student.community.board.showLearningMaterials', '', \Request::url()),
                        new MenuElement('과제', 'trinity.Student.community.board.showAssignment', '', \Request::url()),
                    )),
            )
        ),
        new MenuElement('내 교육 스케줄', 'trinity.Student.mySchedule', 'fa fa-calendar', \Request::url()),
    );
    $view->with('menu_list', $student_sidebar_menu_list);

});

\View::composer('TrinityCommonViews::Layouts.Partials.header', function($view) {

    $currentUser = \Auth::user();
    $role = $currentUser->role;

    $view->with('user', $currentUser)
         ->with('namedRoutePrefix', $role->name);

});