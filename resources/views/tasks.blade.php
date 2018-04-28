@extends('layouts.app')

@section('content')
  @foreach($tasks as $task)
    <div class="row">
      <div class="col s12 m11">
        <div class="card @if (Auth::User()->tasks->contains($task->id)) green @else red @endif lighten-1">
          <div class="card-content white-text">
            <div class="right">
              <h5><span>{{$task->category}}</span><h5>
            </div>
            <span class="card-title">{{$task->name}}</span>
            <p>{{$task->text}}</p>
          </div>
          <div class="card-action">
            <form method="POST" style="padding-top:3%;padding-left:8%" action='{{url("tasks/".$task->id)}}'>
              {{ csrf_field() }}
              <div class="row">
                <div class="col s12 m10">
                  <input type="text" name="flag" required value="{{old('flag')}}">
                </div>
                <div class="col s12 m2">
                  <input class="btn" type="submit" value="Сдать">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  @endforeach
@endsection
