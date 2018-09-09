<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>

    <head>
<body>
<form action="/create" method="post">
    {{csrf_field()}}
    <div>
        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

            <div class="col-md-6">
                <label>
                    <input name="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                           value="{{ old('title') }}" required>
                </label>

                @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="body" class="col-md-4 col-form-label text-md-right">{{ __('Body') }}</label>

            <div class="col-md-6">
                <label>
                    <input name="body" type="text" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}"
                           value="{{ old('body') }}" required autofocus>
                </label>

                @if ($errors->has('body'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                @endif
            </div>
        </div>
    </div>
        <button type="submit">Create</button>
</form>
</body>
</html>