<!DOCTYPE html>
<html>
<head>
    <title>Aston | Login</title>
    @include('AstonLayouts::head')
    <style>
        .form{
            background-color: #fff;
            margin-top: 30px;
            padding: 20px 10px;
        }

    </style>
</head>
<body class="aston-theme-color">

<div class="container">
    <div class="row">
        <div class="container text-center">
            <h2 class="aston-text-secondary">Student Registration Form</h2>
        </div>
    </div>
    <div class="row">
        <form action="{{route('register.faculty')}}" method="post">
            {{csrf_field()}}
            <div class="col-md-offset-3 col-md-6 form">
                <div class="form-group text-center">

                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="First Second Surname"></input>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="name@domain.domain"></input>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="contactno" placeholder="phone number "></input>
                </div>
                <div class="form-group">
                    <textarea name="address" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <textarea name="info" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <select name="department_id" placeholder="department" id="" class="form-control">
                        @foreach($app['departments'] as $department)
                            <option value="{{$department->id}}">{{$department->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="password"></input>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group text-center">
                            <input type="submit" class="btn btn-md btn-success" value="Sign UP">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group text-center">
                            <a href="{{url('/register')}}" class="btn btn-md btn-primary">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
</div>
</div>

</body>
</html>