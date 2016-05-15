@extends('layouts.admin')

@section('content')

      <div class="col-sm-6">
         @if($photos)
         <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Created At:</th>
              </tr>
           </thead>
           <tbody>
              @foreach($photos as $photo)
              <tr>
                 <td>{{ $photo->id}}</td>
                 <td><img height="50px" src="{{ $photo->file }}" alt=""></td>
                 <td>{{ $photo->created_at ? $photo->created_at->diffForHumans() : 'no date'}}</td>
                 <td>
                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediaController@destroy', $photo->id]])!!}

                     <div class="form-group">
                        {!! Form::submit('Delete Photo', ['class'=>"btn btn-danger"]) !!}
                     </div>
                    {!!Form::close()!!}
                 </td>
              </tr>
              @endforeach
           </tbody>
           @endif
         </table>

      </div>

@stop
