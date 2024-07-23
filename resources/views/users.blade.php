@extends('layouts.layoutadmin')

@section('content')

<div class="album py-5 bg-body-tertiary">
    <div class="container">

    

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($users as $user)
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ asset('storage/' . $user->avatar) }}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->name }}</h5>
                        <p class="card-text">{{ $user->email }}</p>
                        <p class="card-text">{{ $user->phone }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <form action="{{ route('users.destroy', $user->id)}}" >
                                    @csrf
                                        <button type="submit" class="btn btn-sm btn-outline-secondary">Удалить</button>
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