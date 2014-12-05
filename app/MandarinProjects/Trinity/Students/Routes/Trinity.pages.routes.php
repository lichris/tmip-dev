<?php

namespace MandarinProjects\Trinity\Students\Routes;

\Route::group(array('prefix' => 'Student', 'before' => 'auth'), function() {

    \Route::get('/', array('as' => 'trinity.Student', function() {
        return \Redirect::route('trinity.Student.myClass.showMyClass');
    }));

    \Route::group(array('prefix' => 'profile'), function() {

        \Route::get('/', array('as' => 'trinity.Student.profile', function() {
            return \Redirect::route('trinity.Student.profile.showMyProfile');
        }));

        \Route::get('/showMyProfile', array('as' => 'trinity.Student.profile.showMyProfile',
            'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showMyProfile'));
    });

    \Route::group(array('prefix' => 'myClass'), function() {

        \Route::get('/', array('as' => 'trinity.Student.myClass', function() {
            return \Redirect::route('trinity.Student.myClass.showMyClass');
        }));

        \Route::get('/showMyClass', array('as' => 'trinity.Student.myClass.showMyClass',
            'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showMyClass'));

        \Route::get('/showIndividually', array('as' => 'trinity.Student.myClass.showIndividually',
            'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showIndividually'));

    });

    \Route::group(array('prefix' => 'levelTest'), function() {

        \Route::get('/', array('as' => 'trinity.Student.levelTest', function() {
            return \Redirect::route('trinity.Student.levelTest.showLevelTest');
        }));

        \Route::get('/showLevelTest', array('as' => 'trinity.Student.levelTest.showLevelTest',
            'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showLevelTest'));

        \Route::get('/participate', array('as' => 'trinity.Student.levelTest.participate',
            'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@participate'));

        \Route::get('/showResults', array('as' => 'trinity.Student.levelTest.showResults',
            'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showResults'));

    });

    \Route::group(array('prefix' => 'comprehensiveEvaluation'), function() {

        \Route::get('/', array('as' => 'trinity.Student.comprehensiveEvaluation', function() {
            return \Redirect::route('trinity.Student.comprehensiveEvaluation.showComprehensiveEvaluation');
        }));

        \Route::get('/showComprehensiveEvaluation', array('as' => 'trinity.Student.comprehensiveEvaluation.showComprehensiveEvaluation',
            'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showComprehensiveEvaluation'));

    });

    \Route::group(array('prefix' => 'manageMyClass'), function() {

        \Route::get('/', array('as' => 'trinity.Student.manageMyClass', function() {
            return \Redirect::route('trinity.Student.manageMyClass.showAbsenceManagement');
        }));

        \Route::get('/showAbsenceManagement', array('as' => 'trinity.Student.manageMyClass.showAbsenceManagement',
            'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showAbsenceManagement'));

    });

    \Route::group(array('prefix' => 'community'), function() {

        \Route::get('/', array('as' => 'trinity.Student.community', function() {
            return \Redirect::route('trinity.Student.community.showCommunity');
        }));

        \Route::get('/showCommunity', array('as' => 'trinity.Student.community.showCommunity',
            'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showCommunity'));

        \Route::get('/showGuestBook', array('as' => 'trinity.Student.community.showGuestBook',
            'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showGuestBook'));

        \Route::group(array('prefix' => 'board'), function() {

            \Route::get('/', array('as' => 'trinity.Student.community.board',function() {
                return \Redirect::route('trinity.Student.community.showBoard');
            }));

            \Route::get('/showBoard', array('as' => 'trinity.Student.community.showBoard',
                'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showBoard'));

            \Route::get('/showBulletin', array('as' => 'trinity.Student.community.board.showBulletin',
                'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showBulletin'));

            \Route::get('/showLearningMaterials', array('as' => 'trinity.Student.community.board.showLearningMaterials',
                'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showLearningMaterials'));

            \Route::get('/showAssignment', array('as' => 'trinity.Student.community.board.showAssignment',
                'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showAssignment'));

        });

    });

    \Route::group(array('prefix' => 'mySchedule'), function() {

        \Route::get('/', array('as' => 'trinity.Student.mySchedule', function() {
            return \Redirect::route('trinity.Student.mySchedule.showMySchedule');
        }));

        \Route::get('/showMySchedule', array('as' => 'trinity.Student.mySchedule.showMySchedule',
            'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showMySchedule'));

    });

});