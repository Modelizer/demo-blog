<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
	{{ session('message') }}
	{{ session('error') }}
  
  <form role="form" action="{{ route('blog.store') }}" method="POST">
	  
	<input type="hidden" value="{{ csrf_token() }}" name="_token" />
	  
    <div class="form-group">
      <label for="">Title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" class="form-control" id="description" name="description">
    </div>
	  
	  <input type="submit" />
  </form>
</div>

</body>
</html>
