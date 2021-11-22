<html>
<head>
    <title>
        Create Post
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <h1>Create Post</h1>
        <form action="{{ url('posts') }}" class="form" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea class="form-control" name="content" cols="3" rows="5"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Save</button>
            </div>

        </form>
    </div>
</div>
</body>
</html>
