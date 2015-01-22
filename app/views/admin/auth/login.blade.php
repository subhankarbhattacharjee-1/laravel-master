@extends('admin._layouts.admin')
@section('content')
<div class='container'>                
	<div class="signin-row row">
		<div class="span4"></div>
			<div class="span8">
				<div class="container-signin">
					<legend>Please Login</legend>
						{{ Form::open(array('route' => 'admin.auth.login'))}}
					<div class="form-inner">
						<div class="input-prepend">                                        
							{{ Form::label('email','Username',["class" => "add-on"]) }}<span class="add-on" rel="tooltip" title="Username" data-placement="top"><i class="icon-envelope"></i></span>
							{{ Form::input('text','email', null, [ "class" => "span4"]) }}
							<label><span class="error">{{ $errors->first('username') }}</span></label>
						</div>
						<div class="input-prepend">                                      
							{{ Form::label('password','Password',["class" => "add-on"]) }}<span class="add-on"><i class="icon-key"></i></span>
							{{ Form::input('password','password', null, [ "class" => "span4"]) }}
							<label><span class="error">{{ $errors->first('password') }}</span></label>
						</div>
						<label class="checkbox" for='remember_me'>Remember me
							<input type='checkbox' id='remember_me'/>
						</label>								
					</div>								
					<footer class="signin-actions">
						{{ Form::submit('Log In',[ "class"=> "btn btn-primary", "id" => "submit" ]) }}<!--<input class="btn btn-primary" type='submit' id="submit" value='Login'/>-->
					</footer>
						{{ Form::close()}}
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		$('#username').focus();
		$('body').addClass('pattern pattern-sandstone');
		$("[rel=tooltip]").tooltip();
	});
</script>
@stop

