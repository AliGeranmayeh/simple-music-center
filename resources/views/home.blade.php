@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="row">
            @foreach ($musics as $music)
            <div class="card m-2" style="width: 18rem;">
                <img src="{{asset($music->image)}}" class="card-img-top img-thumbnail" alt="Music Cover" >
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Music Name: {{$music->name}}</li>
                  <li class="list-group-item">Music Artist: {{$music->artist}}</li>
                  <li class="list-group-item"><audio  controls style="width: 90%;">
                    <source  src="{{asset($music->music)}}" type="audio/mpeg" style="color:black"> 
                    </audio>
                </li>
                <li class="list-group-item">Music Description: {{$music->description}}</li>
                </ul>
            </div>
            @endforeach
        </div>
      </div>
</div>

    </div>
</div>
@endsection
