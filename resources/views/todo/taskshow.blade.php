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
        <h1> Completed Task</h1>


         @if (session('success'))
    <       <div class="alert alert-success">
                {{ session('success') }}

            </div>

        @endif

    </div>


    <div class="container">

        <a href="{{ route('todo.index') }}" class="btn btn-primary mb-3">Back</a>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>title</th>
                    <th>description</th>
                    <th>completed_at</th>

                </tr>
            </thead>

            <tbody>

                @foreach ($completedTasks as $task )



                <tr>
                    <td> {{ $task->title }} </td>
                    <td> {{ $task->description }} </td>
                    <td> {{ $task->completed_at }} </td>




                </tr>
            </tbody>

                @endforeach


        </table>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


