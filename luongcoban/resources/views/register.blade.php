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
    <form action="/register" method="post">
      {{csrf_field()}}
        <div>
            <div class="form-group row">
                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                <div class="col-md-6">
                    <input id="username" type="text">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                <div class="col-md-6">
                    <input id="email" type="email">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="fullname" class="col-md-4 col-form-label text-md-right">{{ __('Fullname') }}</label>
                <div class="col-md-6">
                    <input id="fullname" type="text">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                <div class="col-md-6">
                    <input id="password" type="password">
                </div>
            </div>
        </div>
        <button type="submit">Đăng ký</button>
    </form>
</body>
</html>