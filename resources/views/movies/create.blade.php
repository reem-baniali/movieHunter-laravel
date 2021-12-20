<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
         
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ Route ('movies.index') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ Route ('movies.create') }}">Create</a>
              </li>
              
             
            </ul>
          
          </div>
        </div>
      </nav>
    <form action="{{ route ('movies.store') }}" method="POST"
     class="m-auto mt-5 col-9" enctype="multipart/form-data">
      
        <div class="mb-3">
          <label  class="form-label">Movie Title </label>
          <input type="text" class="form-control" name="movie_title">
        </div>
        @csrf

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Movie description</label>
          <input type="text" class="form-control" name="movie_desc" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Movie Genre</label>
            <input type="text" class="form-control" name="movie_genre" >
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Movie Poster</label>
            <input type="file" class="form-control" name="movie_img" >
          </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>