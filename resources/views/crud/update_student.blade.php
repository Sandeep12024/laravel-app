<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        .container-fluid {
            background-image: url(https://laravel.com/assets/img/welcome/background.svg);
            background-repeat: no-repeat;
        }
        .card  {
            box-shadow: 0px 0px 18px -1px red;
        }
    </style>

</head>
<body>
    
    <div class="container-fluid">
        <div class="row">
 
            <div class="card mt-5" style="width: 40%; margin: 0px 30%">
                <div class="card-body">
                <h4 class="card-title text-center">Update Student Record</h4>
                
                <form method="POST" action="{{ route('updateStudent', $studentData->id) }}">

                    @csrf
                    
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Name</label>
                        <input type="text" name="userName" class="form-control" id="nameInput" value="{{ $studentData->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email</label>
                        <input type="email" name="userEmail" class="form-control" id="emailInput" value="{{ $studentData->email }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="PhoneInput" class="form-label">Phone</label>
                        <input type="tel" name="userPhone" class="form-control" id="PhoneInput" value="{{ $studentData->phone }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="addressInput" class="form-label">Address</label>
                        <input type="text" name="userAddress" class="form-control" id="addressInput" value="{{ $studentData->address }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="cityInput" class="form-label">City</label>
                        <input type="text" name="userCity" class="form-control" id="cityInput" value="{{ $studentData->city }}">
                    </div>
                    
                    <div class="mb-3">
                        <div class="d-grid gap-2">
                            <button class="btn btn-success" type="submit">Update</button>
                        </div>
                    </div>

                </form>

                </div>
            </div>
                
        </div>

        <div class="row text-center my-4">
            <a href="{{ route('allStudent') }}"><button class="btn btn-secondary" type="button"><i class="bi bi-arrow-left-circle"></i> Go back</button></a>
        </div>

    </div>

</body>
</html>