@extends('layouts.layout')

@section('content')

<div class="container">


    <form class="mt-5" method="post" action="">
        
        @csrf

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title" name="title" value="{{  old('title') }}">
          @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control @error('content') is-invalid @enderror" id="content" rows="5" name="content" placeholder="Content" value="{{  old('content') }}"></textarea>
            @error('content')
             <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>


      
        <button type="submit" class="btn mt-3 btn-primary">Submit</button>

    </form>
</div>

@endsection
