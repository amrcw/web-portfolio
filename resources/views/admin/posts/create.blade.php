@extends('layouts.admin')

@section('content')
      <h1>Create Post</h1>

      {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store', 'files'=>true]) !!}
         <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control'])!!}
         </div>

         <div class="form-group">
            {!! Form::label('category_id', 'Category:') !!}
            {!! Form::select('category_id', array('' => 'Choose Categories') + $categories,null, ['class'=>'form-control'])!!}
         </div>

         <div class="form-group">
            {!! Form::label('body', 'Content:') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control'])!!}
         </div>


         <div class="form-group">
            {!! Form::label('photo_id', 'Image:') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control', 'rows'=>5])!!}
         </div>

         <!-- <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', null, ['class'=>'form-control'])!!}
         </div> -->

         <div class="form-group">
            {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
         </div>
      {!! Form::close() !!}

       @include('admin.includes.errors')
@stop
