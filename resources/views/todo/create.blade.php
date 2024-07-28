@extends('layout.app')

@section('content')



<div class="container">
    <h1 class="text-center">Create Task</h1>


    <div class="contain">
    <form action="{{ route('todo.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for ="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for ="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for ="priority">Priority</label>
            <select class="form-control" id="priority" name="priority" required>
                <option value="low">low</option>
                <option value="medium">medium</option>
                <option value="high">high</option>
            </select>
        </div>

        <div class="form-group">
            <label for ="due_date">Due Date</label>
            <input type="date" class="form-control" id="due_date" name="duedate" required>
        </div>

        <div class="form-buttons">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('todo.index') }}" class="btn btn-secondary">Back</a>
        </div>


    </form>

</div>




</div>





@endsection
