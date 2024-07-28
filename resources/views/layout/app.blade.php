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

    <style>
        label {
            font-size: 20px;
            font-weight: bold;
            padding-bottom: 20px;
        }

        .contain {
            margin: auto;
            width: 50%;
            box-shadow: rgba(100,100,111,0.2) 0px 7px 29px 0px;
            padding: 20px;
            border: 1px solid #000;
            border-radius: 8px;
        }

        .form-group {
            margin-bottom: 15px; /* Add spacing between form groups */
        }

        .form-buttons {
            display: flex; /* Use Flexbox for alignment */
            justify-content: center; /* Center buttons horizontally */
            margin-top: 20px; /* Add space above the button container */
        }

        .form-buttons .btn {
            margin: 0 4px; /* Add space between buttons */
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
            color: #fff;
        }
    </style>




@yield('content')









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
