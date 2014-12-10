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
@stop

@section('main_content_section-body')
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-head style-primary">
                    <header><h4 class="text-light"><strong><i class="fa fa-check"></i> 강의 현황</strong></h4></header>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th align="center">상태</th>
                                    <th align="center">클래스 명</th>
                                    <th align="center">시간</th>
                                    <th align="center">회차</th>
                                    <th align="center">수강 기간</th>
                                    <th align="center">강사</th>
                                    <th align="center">진행도</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $count = 1; ?>
                                @foreach($attending_courses as $attending_course)
                                    <tr>
                                    @if($attending_course->status == '미 진행')
                                        <td><span class="badge badge-default">{{ $attending_course->status }}</span></td>
                                    @elseif($attending_course->status == '진행 중')
                                        <td><span class="badge badge-success">{{ $attending_course->status }}</span></td>
                                    @elseif($attending_course->status == '승인 대기')
                                        <td><span class="badge badge-gray">{{ $attending_course->status }}</span></td>
                                    @elseif($attending_course->status == 'Pre 클래스')
                                        <td><span class="badge badge-inverse">{{ $attending_course->status }}</span></td>
                                    @elseif($attending_course->status == '완료')
                                        <td><span class="badge badge-danger">{{ $attending_course->status }}</span></td>
                                    @elseif($attending_course->status == '취소')
                                        <td><span class="badge badge-black">{{ $attending_course->status }}</span></td>
                                    @endif
                                        <td><a href="{{ URL::action('trinity.Student.myClass.showIndividually', array($attending_course->id)) }}">{{ $attending_course->name }}</a></td>
                                        <td>{{ date('H:i:s', strtotime($attending_course->start_datetime)) }} / {{ $attending_course->duration }} 분</td>
                                        <td>1</td>
                                        <td>{{ date('Y-m-d', strtotime($attending_course->start_datetime)) }} ~ {{ date('Y-m-d', strtotime($attending_course->end_datetime)) }}</td>
                                        <td>{{ $attending_course->instructor->user->name_kor }}</td>
                                        <td><div class="progress no-margin"><div class="progress-bar progress-bar-success" style="width: 80%"></div></div></td>
                                    </tr>
                                    <?php $count++; ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div><!--end .table-responsive -->
                </div><!--end .box-body -->
            </div><!--end .box -->
        </div><!--end .col-lg-12 -->
    </div>
@stop