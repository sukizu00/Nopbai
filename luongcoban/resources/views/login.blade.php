<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('dangnhap')}}" method="post">
    {{csrf_field()}}
    <div>
        <div class="form-group row">
            <label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input type="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                       value="{{ old('name') }}" required autofocus>

            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input name="password" type="password"
                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif

            </div>
        </div>
    </div>
    <button type="submit">Đăng nhập</button>
</form>
</body>
</html>