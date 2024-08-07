@extends('layouts.layoutadmin')


@section('content')
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            @foreach ($posts as $post )
                
            
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                        <div class="card-body">
                            <h5 class="card-title">{{$post->name_apps}}</h5>
                            <p class="card-text">цена:{{$post->price}} руб.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
<form action="{{route('destroy_app', $post->id)}}">
    @csrf
                                    <button type="submit" class="btn btn-sm btn-outline-secondary">Delete</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
