@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="row">
            @foreach ($musics as $music)
            <div class="card m-2" style="width: 18rem;">
                <img src="{{$music->profile_image_url}}" class="card-img-top img-thumbnail" alt="Music Cover" >
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Music Name: {{$music->name}}</li>
                  <li class="list-group-item">Music Artist: {{$music->artist}}</li>
                  
                  <li class="list-group-item"><audio  controls style="width: 90%;">
                    <source  src="{{$music->music_url}}" type="audio/mpeg" style="color:black"> 
                    </audio>
                </li>
                <li class="list-group-item">Music Description: {{$music->description}}</li>
                </ul>
                <form action="" method="post" >
                    @csrf
                    <button style="width: 95%" type="submit" class="btn btn-danger" name="delete" value="{{$music->id}}">Delete</button>
                </form>
                
            </div>

            @endforeach
        </div>
      </div>
</div>

    </div>
</div>
@endsection
