<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Add Post</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Card Header
                        </div>
                        <div class="card-body">
                            @if(Session::has('post_created'))
                                <div class="alert alert-success">
                                    {{Session::get('post_created')}}
                                </div>
                            @endif
                            <form method="POST" action="{{route('posts.addpostsubmit')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Post Title</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Enter your title">
                                </div><br>
                                <div class="form-group">
                                    <label for="body">Post Description</label>
                                    <textarea name="body" id="body" cols="30" rows="10"></textarea>
                                </div><br>
                                <input type="submit" class="btn btn-success" value="Submit" name="submit" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>

</body>
</html>