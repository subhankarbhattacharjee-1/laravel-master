@section('nav')
<div class="container">
	<div class="row">
		<div class="span7">
			<header class="page-header">
				<h3>
				</h3>
			</header>
		</div>
		<div class="span9">						
		</div>
	</div>
</div>
@stop
<div class="span16">
	<div class="row">
		<div class="box">                   
				<div data-original-title="" class="box-header well">
					<h5>
						<i class="icon-th"></i> Post Details
					</h5>
				</div>
				<div class="span16">
					<div class="row">
						<div class="well well-small well-shadow">										
							<div class="row">
								<div id="new-post" class="span6">
									<fieldset>    
									 <div class="container">
										 <div class="control-group ">											
										 </div>												
										<div class="control-group ">
											{{ Form::label('user_id','Author',array('class' => 'span2')) }}
											{{ Form::select('user_id',User::lists('name','id'), null, ['class' => 'span7']) }}
											{{-- Form::select('number', [1, 2, 3], null, ['class' => 'field']) --}}
											{{ $errors->first('user_id','<p class="error">:message</p>')}}
										</div>
										<div class="control-group ">
											{{ Form::label('title','Title',array('class' => 'span2')) }}
											{{ Form::text('title',null, array('class' => 'span7')) }}
											{{ $errors->first('title','<p class="error">:message</p>')}}
										</div>												
										<div class="control-group ">
											{{ Form::label('body', 'Body',array('class' => 'span2')) }}            
											{{ Form::textarea('body',null,array('class'=>'span7','placeholder'=>'Post Content here')) }}                                    
											{{ $errors->first('body')}}
										</div>								
									 </div>									
									</fieldset>
								</div> 
								</div>                        
							<footer id="submit-actions" class="form-actions">																				
								{{ link_to_route('admin.posts.index', 'Back', null, array('class' => 'btn btn-warning')) }}
								{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}										    								
							</footer>													   
						</div>
					</div>						
				</div>
			</div>				
		</div>
	</div>
</div>
