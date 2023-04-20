@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($musics as $music)
        <div class="col-md-8">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('uploads/images/'.$music->image)}}" class="card-img-top" alt="Music Cover">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Music Name: {{$music->name}}</li>
                  <li class="list-group-item">Music Artist: {{$music->artist}}</li>
                  <li class="list-group-item"><audio controls>
                    <source src="{{asset('uploads/musics/'.$music->music)}}" type="audio/mpeg"> 
                    </audio>
                </li>
                <li class="list-group-item">Music Description: {{$music->description}}</li>
                </ul>
            </div>
      </div>
</div>
        @endforeach

    </div>
</div>
@endsection
