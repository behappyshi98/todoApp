<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container text-center">
        <h1> Todo Application</h1>

        <h2> Task List</h2>
         @if (session('success'))
    <       <div class="alert alert-success">
                {{ session('success') }}

            </div>

        @endif

    </div>


    <div class="container">

        <a href="{{ route('todo.create') }}" class="btn btn-primary mb-3">Create task</a>
        <a href="{{ route('taskshow') }}" class="btn btn-primary mb-3">completed task</a>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Priority</th>
                    <th> Due Date</th>
                    <th>Actions</th>

                </tr>
            </thead>

            <tbody>

                @foreach ($tasks as $task )



                <tr>
                    <td> {{ $task->title }} </td>
                    <td> {{ $task->description }} </td>
                    <td> {{ $task->priority }} </td>
                    <td> {{ $task->due_date }} </td>

                    <td>
                        <a href="{{ route('todo.edit', $task->id) }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i> Edit
                        </a>

                        <form action="{{ route('todo.destroy', $task->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                <i class="fa fa-trash"></i> Delete
                            </button>
                        </form>


                            @if (!$task->completed)
                        <form action="{{ route('todo.complete', $task->id) }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-warning btn-sm">
                                    <i class="fa fa-check"></i> complete
                            </button>
                        </form>

                            @endif

                    </td>



                </tr>
            </tbody>

                @endforeach


        </table>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


