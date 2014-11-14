<?php

namespace MandarinProjects\Trinity\Students\Routes;

\Route::group(array('prefix' => 'students', 'before' => 'auth'), function() {

    \Route::get('/', array('as' => 'trinity.students', function() {
        return \Redirect::route('trinity.students.myClass.showMyClass');
    }));

    \Route::group(array('prefix' => 'profile'), function() {

        \Route::get('/', array('as' => 'trinity.students.profile', function() {
            return \Redirect::route('trinity.students.profile.showMyProfile');
        }));

        \Route::get('/showMyProfile', array('as' => 'trinity.students.profile.showMyProfile',
            'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showMyProfile'));
    });

    \Route::group(array('prefix' => 'myClass'), function() {

        \Route::get('/', array('as' => 'trinity.students.myClass', function() {
            return \Redirect::route('trinity.students.myClass.showMyClass');
        }));

        \Route::get('/showMyClass', array('as' => 'trinity.students.myClass.showMyClass',
            'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showMyClass'));

        \Route::get('/showIndividually', array('as' => 'trinity.students.myClass.showIndividually',
            'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showIndividually'));

    });

    \Route::group(array('prefix' => 'levelTest'), function() {

        \Route::get('/', array('as' => 'trinity.students.levelTest', function() {
            return \Redirect::route('trinity.students.levelTest.showLevelTest');
        }));

        \Route::get('/showLevelTest', array('as' => 'trinity.students.levelTest.showLevelTest',
            'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showLevelTest'));

        \Route::get('/participate', array('as' => 'trinity.students.levelTest.participate',
            'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@participate'));

        \Route::get('/showResults', array('as' => 'trinity.students.levelTest.showResults',
            'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showResults'));

    });

    \Route::group(array('prefix' => 'comprehensiveEvaluation'), function() {

        \Route::get('/', array('as' => 'trinity.students.comprehensiveEvaluation', function() {
            return \Redirect::route('trinity.students.comprehensiveEvaluation.showComprehensiveEvaluation');
        }));

        \Route::get('/showComprehensiveEvaluation', array('as' => 'trinity.students.comprehensiveEvaluation.showComprehensiveEvaluation',
            'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showComprehensiveEvaluation'));

    });

    \Route::group(array('prefix' => 'manageMyClass'), function() {

        \Route::get('/', array('as' => 'trinity.students.manageMyClass', function() {
            return \Redirect::route('trinity.students.manageMyClass.showAbsenceManagement');
        }));

        \Route::get('/showAbsenceManagement', array('as' => 'trinity.students.manageMyClass.showAbsenceManagement',
            'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showAbsenceManagement'));

    });

    \Route::group(array('prefix' => 'community'), function() {

        \Route::get('/', array('as' => 'trinity.students.community', function() {
            return \Redirect::route('trinity.students.community.showCommunity');
        }));

        \Route::get('/showCommunity', array('as' => 'trinity.students.community.showCommunity',
            'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showCommunity'));

        \Route::get('/showGuestBook', array('as' => 'trinity.students.community.showGuestBook',
            'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showGuestBook'));

        \Route::group(array('prefix' => 'board'), function() {

            \Route::get('/', array('as' => 'trinity.students.community.board',function() {
                return \Redirect::route('trinity.students.community.showBoard');
            }));

            \Route::get('/showBoard', array('as' => 'trinity.students.community.showBoard',
                'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showBoard'));

            \Route::get('/showBulletin', array('as' => 'trinity.students.community.board.showBulletin',
                'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showBulletin'));

            \Route::get('/showLearningMaterials', array('as' => 'trinity.students.community.board.showLearningMaterials',
                'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showLearningMaterials'));

            \Route::get('/showAssignment', array('as' => 'trinity.students.community.board.showAssignment',
                'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showAssignment'));

        });

    });

    \Route::group(array('prefix' => 'mySchedule'), function() {

        \Route::get('/', array('as' => 'trinity.students.mySchedule', function() {
            return \Redirect::route('trinity.students.mySchedule.showMySchedule');
        }));

        \Route::get('/showMySchedule', array('as' => 'trinity.students.mySchedule.showMySchedule',
            'uses' => '\MandarinProjects\Trinity\Students\Controllers\PagesController@showMySchedule'));

    });

});