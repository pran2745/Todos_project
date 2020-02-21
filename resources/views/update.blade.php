@extends('layout')

@section('content')

<div class="row">
  <div class="col-lg-12">

    <form class="" action="{{ route('todo-save', ['id' => $todo->id]) }}" method="post">
      {{ csrf_field() }}
      <input type="text" class="form-control input-lg" placeholder="Update todo" name="todo" value="{{ $todo->todo }}">
      <button type="submit" name="btn">Submit</button>
    </form>

  </div>
</div>
<hr>

@stop
