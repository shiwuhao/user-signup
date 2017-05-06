<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Latest compiled and minified CSS & JS -->
        <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container-fluid">
        @if ($errors)
            {{ var_dump($errors->all()) }}
        @endif
        <form action="{{ url('users') }}" method="post" role="form" class="col-md-6 col-md-offset-3">
            {{ csrf_field() }}
            <legend>Form Title</legend>
            {{--<input type="hidden" name="_method" value="post">--}}
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control" name="name" id="" placeholder="Input..." value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="" >Email</label>
                <input type="email" class="form-control" name="email" id="" placeholder="" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="" >Password</label>
                <input type="password" class="form-control" name="password" id="" placeholder="" value="{{ old('password') }}">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </body>
</html>
