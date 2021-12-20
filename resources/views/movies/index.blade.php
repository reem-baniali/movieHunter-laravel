@extends('layouts.master')

@section('content')

    
<div class="mt-5 mb-5 d-flex  ">
    
            @foreach ( $movies as $movie )
            <div class="card me-5 col-3" style="width: 18rem; background-color:black ">
              <img src="storage/images/{{ $movie->movie_img }}" class="card-img-top" alt="Poster">
              <div class="card-body ">
                <h5 class="card-title m-auto">{{ $movie->movie_title }}</h5>
                {{-- <p class="card-text">{{ $movie->movie_desc }}</p> --}}
                <a href="#" class="btn rounded btn-success">Show</a>
                <a href="{{route('movies.edit',$movie->id) }} ">
                  <button class="btn rounded btn-primary">Edit</button></a>
                <form action="{{ route('movies.destroy', $movie ->id)}}" method="post" 
                  class="d-inline-block">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger rounded btn-sm" type="submit">Delete</button>
                </form>
              </div>
            </div>
         
          @endforeach
       
        </div>
   
@endsection