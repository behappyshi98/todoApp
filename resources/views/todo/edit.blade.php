@extends('layout.app')

@section('content')



<div class="container">
    <h1 class="text-center">Edit Task</h1>




    <div class="contain">

    <form action="{{ route('todo.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for ="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}" required>
        </div>
        <div class="form-group">
            <label for ="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ $task->description }}</textarea>
        </div>

        <div class="form-group">
            <label for ="priority">Priority</label>
            <select class="form-control" id="priority" name="priority" required>
                <option value="low" @if($task->priority == 'low') selected @endif>low</option>
                <option value="medium">medium</option>
                <option value="high">high</option>
            </select>
        </div>

        <div class="form-group">
            <label for ="due_date">Due Date</label>
            <input type="date" class="form-control" id="due_date" name="duedate" value="{{  $task->due_date }}" required>
        </div>

        <div class="form-buttons">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('todo.index') }}" class="btn btn-secondary">Back</a>
        </div>


    </form>

</div>

</div>



@endsection
