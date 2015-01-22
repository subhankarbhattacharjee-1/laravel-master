@extends('admin._layouts.admin')
@section('content')
	
	<h2>Edit Post</h2>
	{{ Form::Model($post,array('route' => array('admin.posts.update',$post->id),'method' => 'put'))}}
		@include('admin.posts._partials.form')					
	{{ Form::close()}}
				

@stop
