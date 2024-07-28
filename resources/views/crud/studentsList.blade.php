<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            background-image: url(https://laravel.com/assets/img/welcome/background.svg);
            background-repeat: no-repeat;
        }
        .table .table-striped  {
            box-shadow: 0px 0px 18px -1px red;
        }
    </style>

</head>
<body>
    
    <div class="container-fluid">
        <div class="container">
            
            <div class="col-12 mt-5"><a href="{{ route('addNewStudent') }}"><button type="button" class="btn btn-success"><i class="bi bi-plus-circle"></i> Add Student</button></a></div>
            
            <div class="table mt-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Sr.No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($all_students as $key => $students)
                        
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $students->name }}</td>
                            <td>{{ $students->email }}</td>
                            <td>{{ $students->phone }}</td>
                            <td>{{ $students->address }}</td>
                            <td>{{ $students->city }}</td>
                            <td><a href="{{ route('getStudent', $students->id) }}"><button type="button" class="btn btn-secondary"><i class="bi bi-pencil-square"></i> Edit</button></a></td>
                            <td><a href="{{ route('deleteStudent', $students->id) }}"><button type="button" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</button></a></td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>    
        
        </div>
    </div> 

</body>
</html>