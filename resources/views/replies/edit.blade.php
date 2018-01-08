@extends('layouts.app')

@section('content')

	<div class="panel panel-default">
		<div class="panel-heading text-center">Edit Reply</div>

		<div class="panel-body">
			<form action="{{ route('reply.update',['id'=>$reply->id ] )}}" method="POST">
				{{ csrf_field() }}
				
				<div class="form-group">
					<label for="content">Answer a Question</label>
					<textarea name="content" id="content" cols="10" rows="10" class="form-control">{{ $reply->content }}</textarea>							
				</div>
				
				<div class="form-group">
					<button class="btn btn-success pull-right" type="submit">Update Reply</button>				
				</div>
				
			</form>
		</div>
	</div>
       
@endsection
