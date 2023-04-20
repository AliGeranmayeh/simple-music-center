@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form method="post" enctype="multipart/form-data" style="width: 60%">
            @csrf
            <div class="form-group my-3" >
              <label for="name">Music Name</label>
              <input type="text" class="form-control" id="name" name="name"  placeholder="Enter music name">
            </div>
            <div class="form-group my-3" >
                <label for="artist">Artist Name</label>
                <input type="text" class="form-control" id="artist" name="artist"  placeholder="Enter artist name">
              </div>
              <div class="form-group my-3">
                <label for="more_info">More Information</label>
                <textarea class="form-control" id="more_info" name="more_info" rows="3"></textarea>
              </div>
              <div class="mb-3 my-3">
                <label for="image" class="form-label">Please enter cover of music</label>
                <input class="form-control" type="file" id="image" name="image">
              </div>
              <div class="mb-3 my-3">
                <label for="music" class="form-label">Please enter your music</label>
                <input class="form-control" type="file" id="music" name="music">
              </div>
            
            <button type="submit" class="btn btn-primary my-2">Submit</button>
          </form>
    </div>
</div>
@endsection
