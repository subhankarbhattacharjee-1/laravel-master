@extends('admin._layouts.admin')
@section('nav')
<div class="container">
	<div class="row">
		<div class="span7">
			<header class="page-header">
				<h3>
					Welcome, {{Auth::user()->name}}
				</h3>
			</header>
		</div>
		<div class="span9">			
			<ul class="nav nav-pills">
     			<li><a href="{{ url() }}/admin/posts/create" rel="tooltip" data-placement="left" title="Add New Post">
                <i class="icon-group icon-large"></i>
                </a>
				</li>
			</ul>
		</div>
	</div>
</div>
@stop 
@section('content')
<div class='container'>
	<div class="box pattern pattern-sandstone">
		<div class="box-header">
			<i class="icon-table"></i>
			<h5>Post List</h5>
		</div> 
		<div class="box-content box-table">
			<table id="user-table"
				class="table table-hover table-bordered tablesorter">
				<thead>
					<tr>
						<th class="header">Author</th>														
						<th class="header">Status</th>						
						<th class="td-actions">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ( $posts as $post)
					<tr>
						<td class="td-actions">{{ $post->name }}</td>
						<td>{{ link_to_route('admin.posts.edit',$post->title, array($post->id))}}</td>						
						<td class="td-actions">
							<button class="btn btn-small btn-danger" data-form="#frmDelete-{{$post->id}}" data-title="Delete Post" data-message="Are you sure, you want to delete this Post ?" >
								<a class = "formConfirm" href=""><i class="btn-icon-only icon-trash"></i> Remove</a>
							</button>							
							{{ Form::open(array(
									'url' => route('admin.posts.destroy', array($post->id)),
									'method' => 'delete',
									'style' => 'display:none',
									'id' => 'frmDelete-' . $post->id
								))
							}}
							{{ Form::submit('Submit') }}
							{{ Form::close() }}												
						</td>												
					</tr>
					@endforeach
				</tbody>
			</table>			
		</div>
	</div>
</div>
<!-- Modal Dialog for Delete -->
<div class="modal fade" id="formConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="frm_title">Delete</h4>
      </div>
      <div class="modal-body" id="frm_body"></div>
      <div class="modal-footer">
        <button style='margin-left:10px;' type="button" class="btn btn-danger col-sm-2 pull-right" id="frm_submit">Delete</button>
        <button type="button" class="btn btn-primary col-sm-2 pull-right" data-dismiss="modal" id="frm_cancel">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!-- Dialog show event handler for delete -->
<script type="text/javascript">
  $('.formConfirm').on('click', function(e) {
        e.preventDefault();
        var el = $(this).parent();
        var title = el.attr('data-title');
        var msg = el.attr('data-message');
        var dataForm = el.attr('data-form');
        
        $('#formConfirm')
        .find('#frm_body').html(msg)
        .end().find('#frm_title').html(title)
        .end().modal('show');
        
        $('#formConfirm').find('#frm_submit').attr('data-form', dataForm);
  });
  $('#formConfirm').on('click', '#frm_submit', function(e) {
        var id = $(this).attr('data-form');
        $(id).submit();
  });
</script>
<script>
$(document).ready(function() {
    $('#user-table').dataTable({
		"aoColumns": [
        null,       
        null,
        { "bSortable": false } // <-- disable sorting for column 3        
     ]
	});
});
</script>
@stop

