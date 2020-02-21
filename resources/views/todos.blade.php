@extends('layout')

@section('content')

@foreach($todos as $todo)
  {{ $todo->todo }} <a href="{{ route('todo-delete',['id' => $todo->id]) }}"class="btn btn-danger">x</a>
  <a href="{{ route('todo-update',['id' => $todo->id]) }}"class="btn btn-success">Update</a>

  @if(!$todo->completed)

    <a href="{{ route('todo-completed',['id' => $todo->id]) }}" class="btn btn-xs btn-success">Mark as completed</a>

  @else
    <span class="text-success">Completed</span>
  @endif

  <hr>
@endforeach


<div class="row">
  <div class="col-lg-6 col-lg-offset-3">

    <form class="" action="{{ route('create-todo') }}" method="post">
      {{ csrf_field() }}
      <input type="text" class="form-control input-lg" placeholder="Create a new todo" name="todo" value="">
      <button type="submit" name="btn">Submit</button>
    </form>

  </div>
</div>
<hr>

@stop
