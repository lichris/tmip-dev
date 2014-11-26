@extends('TrinityCommonViews::Layouts.master')

@section('main_content_breadcrumb')
    <li><a href="../../html/.html">home</a></li>
    <li class="active">Static tables</li>
@stop

@section('main_content_section-header')
    <h3 class="text-standard"><i class="fa fa-fw fa-arrow-circle-right text-gray-light"></i> Static tables <small>Basic styling for datasets</small></h3>
@stop

@section('main_content_section-body')
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-outlined">
                <div class="box-head">
                    <header><h4 class="text-light">Responsive Table <strong>Basic</strong></h4></header>
                </div>
                <div class="box-body">
                    <p>Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code> to make them scroll horizontally up to small devices (under 768px). When viewing on anything larger than 768px wide, you will not see any difference in these tables.</p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!--end .table-responsive -->
                </div><!--end .box-body -->
            </div><!--end .box -->
        </div><!--end .col-lg-12 -->
    </div>
@stop