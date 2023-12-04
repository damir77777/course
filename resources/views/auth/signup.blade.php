<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<x-header />
<body>
    <form action="/signup_valid" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" name="user_name" id="exampleInputEmail" value="{{old('user_name')}}">
          </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail" value="{{old('email')}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="pass" id="exampleInputPassword1" value="{{old('pass')}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Confirm_password</label>
            <input type="password" class="form-control" name="confirm_pass" id="exampleInputPassword2" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>
