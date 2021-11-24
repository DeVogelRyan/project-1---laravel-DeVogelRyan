<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel Image Upload Example with Coding Driver</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

</head>
<body>

<div class="container mt-4">
  <h2>Laravel Image Upload Example with- <a href="https://codingdriver.com/">codingdriver.com</a></h2>
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <form method="post" action="{{ route('images.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
          <input type="file" name="file" class="form-control{{ $errors->has('file') ? ' is-invalid' : '' }}" >
          @if ($errors->has('file'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('file') }}</strong>
              </span>
          @endif
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success">Save</button>
      </div>
    </form>
</div>
</body>
</html>
