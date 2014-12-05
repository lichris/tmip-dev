@extends('TrinityCommonViews::Layouts.master')

@section('main_content')
    <!-- START LOGIN BOX -->
    <div class="box-type-login">
        <div class="box text-center">
            <div class="box-head">
                <h2 class="text-light text-white"></h2>
                <h4 class="text-bold text-white">
                    <i class="fa fa-ban"></i>
                    <span>  Email or Password not Correct!</span>
                </h4>
            </div>
            <div class="box-body box-centered">
                {{ HTML::image('img/logos/logo_The_Mandarin.png',
                               'The Mandarin Integration Platform',
                               array('id' => 'login-page-The-Mandarin-Logo')) }}

                {{ Form::open() }}
                    <div class="row">
                        <div class="col-xs-8" style="padding-right: 5px;">
                            <div id="login-page-email-form-group" class="form-group">
                                <div class="input-group col-xs-12">
                                    {{ Form::email('account_email', null,
                                                   array('id' => 'login-page-email-input',
                                                         'class' => 'form-control',
                                                         'placeholder' => 'Email')); }}
                                </div>
                            </div>
                            <div id="login-page-password-form-group" class="form-group">
                                <div class="input-group col-xs-12">
                                    {{ Form::password('password',
                                                   array('id' => 'login-page-password-input',
                                                         'class' => 'form-control',
                                                         'placeholder' => 'Password')); }}
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-4" style="padding-left: 0;">
                            {{ Form::submit('Login', array('class' => 'col-xs-12 text-boldest',
                                                           'id' => 'login-page-login-submit')); }}
                        </div>
                    </div>

                {{ Form::close() }}

            </div><!--end .box-body -->
            <div class="box-footer force-padding text-white">
                <span>
                    <i>forgot your password?</i>
                    <i class="text-bold">{{ HTML::linkRoute('trinity.forgotPassword', 'Click Here') }}</i>
                </span>
                <span>
                    <p class="text-light text-white" style="margin-top: 60px;">TMIP version 0.0.1</p>
                </span>

            </div>
        </div>
    </div>
    <!-- END LOGIN BOX -->
@stop