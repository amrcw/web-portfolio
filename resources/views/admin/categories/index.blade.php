@extends('layouts.admin');

@section('content')
   <div class="col-sm-6">
      <h1>Create Category</h1>
   {!!  Form::open(['method'=>'POST','action'=>'AdminCategoriesController@store', 'files'=>true]) !!}
         <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control'])!!}
         </div>
         <div class="form-group">
            {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
         </div>
      {!! Form::close() !!}
   </div>

   <div class="col-sm-6">
      @if($categories)
      <table class="table">
         <thead>
           <tr>
             <th>ID</th>
             <th>Name</th>
             <th>Created At:</th>
           </tr>
        </thead>
        <tbody>
           @foreach($categories as $category)
           <tr>
              <td>{{ $category->id}}</td>
              <td><a href="{{route('admin.categories.edit', $category->id)}}">{{ $category->name }}</a></td>
              <td>{{ $category->created_at ? $category->created_at->diffForHumans() : 'no date'}}</td>
           </tr>
           @endforeach
        </tbody>
        @endif
      </table>

   </div>
@stop
