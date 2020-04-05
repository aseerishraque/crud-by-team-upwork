<!DOCTYPE html>

<html>

<head>

    <title>Laravel 6 CRUD Application</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

</head>

<body>

  

<div class="container">

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Employees List</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="#"> Add New Employee</a>

            </div>

        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table table-bordered">

        <tr>

            

            <th>Name</th>

            <th>Phone</th>
            <th>Email</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($employees as $employee)

        <tr>

           

            <td>{{ $employee->name }}</td>

            <td>{{ $employee->phone }}</td>
            <td>{{ $employee->email }}</td>

            <td>

              {{--  <form action="{{ route('employee.destroy',$employee->id) }}" method="POST">--}}

   

                   <a class="btn btn-info" {{-- href="{{ route('employee.show',$employee->id) }}"--}}>Show</a>

    

                 <a class="btn btn-primary"{{-- href="{{ route('employee.edit',$employee->id) }}"--}}>Edit</a>

   
{{--
                    @csrf

                    @method('DELETE')

      --}}

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

</div>

   

</body>

</html>