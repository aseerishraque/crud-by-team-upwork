<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Edit Employee</title>
</head>
<body>
<h1>Edit Employee</h1>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input value="{{ $employee->name }}" name="name" required type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Full Name">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input value="{{ $employee->phone }}" name="phone" required type="text" class="form-control"  placeholder="Phone">
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input value="{{ $employee->email }}" name="email" required type="email" class="form-control"  placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Old Password</label>
                    <input name="old_pass" required type="password" class="form-control"  placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="password">New Password</label>
                    <input name="new_pass" required type="password" class="form-control"  placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="password">Re-Enter Password</label>
                    <input name="re_pass" required type="password" class="form-control"  placeholder="Password">
                </div>
                <button type="update" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>