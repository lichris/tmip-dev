@extends('TrinityCommonViews::Layouts.master')

@section('main_content')
	<!-- START LOGIN BOX -->
	<div class="box-type-login">
		<div class="box text-center">
			<div class="box-head"></div>
			<div class="box-body box-centered no-padding" style="margin-top: 13%;">
				
				<h2 class="no-margin">
					{{ HTML::image('img/logos/logo_The_Mandarin.png', '', array('id' => 'the-mandarin-logo')) }}
				</h2>
				
				{{ Form::open(array()) }}

						<table id="login-form-table-group" class="col-xs-12 no-padding">
							<tbody>
								<tr>
									<td class="col-xs-8 no-padding">
										<div id="user-email" class="col-xs-12 no-padding">
											{{ Form::email('user_email', '', array('class' => 'form-control no-padding',
																					'placeholder' => 'Email')) }}
										</div>
									</td>
									
									<td class="col-xs-4 no-padding" rowspan="2" style="vertical-align: top;">
										{{ Form::button('Login', array('type' => 'submit',
																		'class' => 'btn btn-default col-xs-12 text-bolder',
																		'id' => 'login-submit-btn')) }}
									</td>
								</tr>
								<tr>
									<td class="col-xs-8 no-padding">
										<div id="user-password" class="col-xs-12 no-padding">
											{{ Form::password('password', array('class' => 'form-control no-padding',
																					 'placeholder' => 'Password')) }}
										</div>
									</td>
								</tr>
							</tbody>
						</table>

				{{ Form::close() }}

				<div id="forgot-password" class="text-center">
					<br>forgot your password? <a href="" class="">Click Here</a>
				</div>
			</div><!--end .box-body -->
			<div class="box-footer force-padding text-white" style="bottom: 0; display: none;">
			</div>
		</div>
	</div>
	<!-- END LOGIN BOX -->
@stop