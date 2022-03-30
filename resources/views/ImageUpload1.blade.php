<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Ajax Image Upload Example - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
<div class="container">

    <div class="panel panel-primary">

        <div class="panel-heading">
            <h2>Laravel 9 Ajax Image Upload Example - ItSolutionStuff.com</h2>
        </div>

        <div class="panel-body">

            <img id="preview-image" width="300px">

            <form action="{{ route('image.store') }}" method="POST" id="image-upload" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" name="profile_image[]" id="exampleInputFile" multiple />
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

        </div>
    </div>
</div>
</body>

</html>
