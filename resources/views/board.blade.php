@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col s12 m11">
      <ul class="collection with-header">
        <li class="collection-header"><h4>Тупо красавцы</h4></li>
        @foreach($users as $user)
          <li class="collection-item"><div>{{$user->name}}<span class="secondary-content">{{$user->tasks->sum('price')}}</span></div></li>
        @endforeach
      </ul>
    </div>
  <div>
@endsection
