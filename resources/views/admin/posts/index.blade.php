@extends('layouts.admin');

@section('content')
   <h1>Posts Admin</h1>

   <table class="table">
    <thead>
      <tr>
        <th>Photo</th>
        <th>Id</th>
        <th>Owner</th>
        <th>Category</th>
        <th>Title</th>
        <th>Body</th>
        <th>Created At</th>
        <th>Updated On</th>
      </tr>
    </thead>
    <tbody>
   @if($posts)
   @foreach($posts as $post)
      <tr>
         <td><img height="50px" src="{{ $post->photo ? $post->photo->file : 'http://placehold.it/50*50'}}" alt=""></td>
        <td>{{ $post->id}}</td>
        <td>{{ $post->user->name}}</td>
        <td>{{ $post->category ? $post->category->name : 'Uncategorized'}}</td>
        <td>{{ $post->title}}</td>
        <td>{{ $post->body}}</td>
        <td>{{ $post->created_at->diffForHumans()}}</td>
        <td>{{ $post->updated_at->diffForHumans()}}</td>


      </tr>
   @endforeach
   @endif

    </tbody>
  </table>
@stop
