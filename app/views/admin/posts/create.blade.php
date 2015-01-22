@extends('admin._layouts.admin')
@section('content')

	<h2>Create New Post</h2>
	{{ Form::open(array('route' => 'admin.posts.store','method' => 'post'))}}
		@include('admin.posts._partials.form')
	{{ Form::close()}}
				

@stop
