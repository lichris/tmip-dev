@extends('TrinityCommonViews::Layouts.master')

@section('additional_css_includes')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
@stop

@section('additional_js_includes')
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
@stop

@section('main_content_breadcrumb')
    <li><a href="../../html/.html">home</a></li>
    <li class="active">Static tables</li>
@stop

@section('main_content_section-header')
    <h3 class="text-standard"><i class="fa fa-fw fa-arrow-circle-right text-gray-light"></i> 내 클래스 <small>개별 보기</small></h3>
        <div class="row">
            <div class="col-lg-12">
                <div class="box style-transparent">
                    <!-- START PROFILE TABS -->
                    <div class="box-head">
                    </div>
                    <!-- END PROFILE TABS -->

                    <div class="tab-content">
                        <!-- START PROFILE OVERVIEW -->
                        <div class="tab-pane active" id="overview">
                            <div class="box-tiles style-white">
                                <div class="row">
                                    <!-- START PROFILE SIDEBAR -->
                                    <div class="col-sm-3 style-inverse">
                                        <div class="holder">
                                            <img class="img-rounded img-responsive" src="/profile/big/{{ $currentUser->id }}" alt="" />
                                        </div>
                                        <div class="box-body style-inverse">
                                            <p class="text-white">
                                            </p>
                                            <address class="text-white">
                                            </address>
                                        </div>

                                        <div class="box-body style-inverse">
                                            <address class="text-white">
                                            </address>
                                            <address class="text-white">
                                            </address>
                                        </div>
                                    </div><!--end .col-sm-3 -->
                                    <!-- END PROFILE SIDEBAR -->

                                    <!-- START PROFILE CONTENT -->
                                    <div class="col-sm-9">

                                        {{--<div class="alert alert-warning">--}}
                                            {{--<i class="fa fa-comments"></i> You have 7 new comments--}}
                                            {{--<a href="#" class="link-default">Read comments</a>--}}
                                        {{--</div>--}}

                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <p class="lead">자기소개 시작했다~</p>
                                                    <p>소개 끝났다~!</p>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="pie-chart flot text-center">
                                                        <div class="chart size-3 v-inline-middle" data-title="Site visits" data-color="#FBEED5,#2E383D"></div>
                                                        <div class="legend v-inline-middle text-left"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">&nbsp;</div><!-- Extra row gap-->
                                        </div>
                                    </div><!--end .col-sm-9 -->
                                    <!-- END PROFILE CONTENT -->

                                </div><!--end .row -->
                            </div><!--end .box-body -->
                        </div><!--end .tab-pane -->
                        <!-- END PROFILE OVERVIEW -->

                        <!-- START PROFILE MYBOARD -->
                        <div class="tab-pane" id="myBoard">
                            <div class="box-tiles style-white">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-8">
                                        <h4>5 Comments</h4>
                                        <ul class="list-comments">
                                            <li>
                                                <div class="box style-white">
                                                    <div class="comment-avatar"><i class="glyphicon glyphicon-user text-gray-lighter"></i></div>
                                                    <div class="box-body">
                                                        <h4 class="comment-title">Jim Peters <small>20/06/2013 at 4:02 pm</small></h4>
                                                        <a class="btn btn-inverse stick-top-right" href="#respond">Reply</a>
                                                        <p>Etiam dui libero, tempor quis congue in, interdum eget tortor. Vivamus aliquam dictum lacus quis tincidunt. Phasellus rhoncus ante sollicitudin nisl consectetur ultricies. Sed rhoncus ullamcorper mauris, ac condimentum metus egestas ut. Nam et urna ante, vitae pretium lacus.</p>
                                                    </div>
                                                </div><!--end .box -->
                                            </li><!-- end comment -->
                                            <li>
                                                <div class="box style-white">
                                                    <div class="comment-avatar"><span class="glyphicon glyphicon-user text-gray-lighter"></span></div>
                                                    <div class="box-body">
                                                        <h4 class="comment-title">CarolSharp <small>20/06/2013 at 4:14 pm</small></h4>
                                                        <a class="btn btn-inverse stick-top-right" href="#respond">Reply</a>
                                                        <p>Integer ac magna lacinia velit bibendum ornare. Morbi eget dui lectus, eget eleifend mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                                    </div>
                                                </div><!--end .box -->
                                                <ul>
                                                    <li>
                                                        <div class="box style-inverse">
                                                            <div class="comment-avatar"><img class="img-circle" src="../../../assets/img/avatar1.jpg?1401481655" alt=""></div>
                                                            <div class="box-body">
                                                                <h4 class="comment-title">Daniel Johnson <small>20/06/2013 at 4:38 pm</small></h4>
                                                                <a class="btn btn-inverse stick-top-right" href="#respond">Reply</a>
                                                                <p>Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer ac magna lacinia velit bibendum ornare. Morbi eget dui lectus, eget eleifend mi.</p>
                                                            </div>
                                                        </div><!--end .box -->
                                                    </li><!-- end sub-comment -->
                                                    <li>
                                                        <div class="box style-white">
                                                            <div class="comment-avatar"><span class="glyphicon glyphicon-user text-gray-lighter"></span></div>
                                                            <div class="box-body">
                                                                <h4 class="comment-title">Amber Page <small>20/06/2013 at 4:41 pm</small></h4>
                                                                <a class="btn btn-inverse stick-top-right" href="#respond">Reply</a>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in tempus lorem. Vivamus ullamcorper leo risus, non vehicula odio.</p>
                                                            </div>
                                                        </div><!--end .box -->
                                                        <ul>
                                                            <li>
                                                                <div class="box style-white">
                                                                    <div class="comment-avatar"><img class="img-circle" src="../../../assets/img/avatar2.jpg?1401481650" alt=""></div>
                                                                    <div class="box-body">
                                                                        <h4 class="comment-title">Janie Ward <small>20/06/2013 at 4:56 pm</small></h4>
                                                                        <a class="btn btn-inverse stick-top-right" href="#respond">Reply</a>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in tempus lorem. Vivamus ullamcorper leo risus, non vehicula odio.</p>
                                                                    </div>
                                                                </div><!--end .box -->
                                                            </li><!-- end sub-sub-comment -->
                                                        </ul>
                                                    </li><!-- end sub-comment -->
                                                </ul>
                                            </li><!-- end comment -->
                                            <li>
                                                <div class="box style-white">
                                                    <div class="comment-avatar"><img class="img-circle" src="../../../assets/img/avatar3.jpg?1401481654" alt=""></div>
                                                    <div class="box-body">
                                                        <h4 class="comment-title">Marshall Buchanan <small>21/06/2013 at 3:32 am</small></h4>
                                                        <a class="btn btn-inverse stick-top-right" href="#respond">Reply</a>
                                                        <p>Vestibulum in tempus lorem. Vivamus ullamcorper leo risus, non vehicula odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    </div>
                                                </div><!--end .box -->
                                            </li><!-- end comment -->
                                        </ul>
                                    </div><!--end .col-md-9 -->
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-8">
                                        <h4>Leave a comment</h4>
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <div class="col-md-2">
                                                    <label for="name" class="control-label">Name</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="email" id="name" class="form-control control-width-normal" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-2">
                                                    <label for="email" class="control-label">Email</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" id="email" class="form-control control-width-normal" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-2">
                                                    <label for="website" class="control-label">Website</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" id="website" class="form-control control-width-normal" placeholder="Website">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-2">
                                                    <label for="textarea1" class="control-label">Comment</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <textarea name="textarea1" id="textarea1" class="form-control" rows="6" placeholder="Leave a comment"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-footer col-md-offset-2">
                                                <button type="submit" class="btn btn-primary">Post comment</button>
                                            </div>
                                        </form>
                                    </div><!--end .col-md-9 -->
                                </div>
                            </div><!--end .box-body -->
                        </div><!--end .tab-pane -->
                        <!-- END PROFILE OVERVIEW -->

                        <!-- START PROFILE EDITOR -->
                        <div class="tab-pane" id="editDetails">
                            <div class="box-body style-white">
                                <div class="well">
                                    <span class="label label-success"><i class="fa fa-comment"></i></span>
                                    <span>Add a personal message here.</span>
                                </div>
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <div class="col-lg-1 col-md-2 col-sm-3">
                                            <label for="email1" class="control-label">Email</label>
                                        </div>
                                        <div class="col-lg-11 col-md-10 col-sm-9">
                                            <input type="email" name="email1" id="email1" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <label for="password1" class="control-label">Password</label>
                                                </div>
                                                <div class="col-lg-10 col-md-8 col-sm-6">
                                                    <input type="password" name="password1" id="password1" class="form-control" placeholder="Password">
                                                    <p class="help-block">Use Alphanumeric characters.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                    <label for="repeatpassword1" class="control-label">Repeat</label>
                                                </div>
                                                <div class="col-lg-10 col-md-8 col-sm-6">
                                                    <input type="password" name="repeatpassword1" id="repeatpassword1" class="form-control" placeholder="Repeat password">
                                                    <p class="help-block">Retype your password.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-1 col-md-2 col-sm-3">
                                            <label for="select1" class="control-label">Select</label>
                                        </div>
                                        <div class="col-lg-11 col-md-10 col-sm-9">
                                            <select name="select1" id="select1" class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                            <p class="help-block">This is supporting text for this field.</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-1 col-md-2 col-sm-3">
                                            <label for="textarea1" class="control-label">
                                                Textarea
                                                <small>Info about this field</small>
                                            </label>
                                        </div>
                                        <div class="col-lg-11 col-md-10 col-sm-9">
                                            <textarea name="textarea1" id="textarea1" class="form-control" rows="3" placeholder="Textarea"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-1 col-md-2 col-sm-3">
                                            <label class="control-label">
                                                Checkboxes
                                            </label>
                                        </div>
                                        <div class="col-lg-11 col-md-10 col-sm-9">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="cb1" > Check me out
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-footer col-lg-offset-1 col-md-offset-2 col-sm-offset-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="submit" class="btn btn-default">Reset</button>
                                    </div>
                                </form>
                            </div><!--end .box-body -->
                        </div><!--end .tab-pane -->
                        <!-- END PROFILE EDITOR -->

                    </div><!--end .tab-content -->
                </div><!--end .box -->
            </div><!--end .col-lg-12 -->
        </div><!--end .row -->
@stop

@section('main_content_section-body')

@stop