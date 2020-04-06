@extends('layouts.app')

@section('content')
<div class="container">
    @if(session()->has('error'))
        <div class="alert alert-danger">{{ session()->get('error') }}</div>
    @endif
    <h1>Profile</h1>

    <form action="{{ route('media.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" id="mediafile" name="mediafile" class="custom-file-input"  aria-describedby="mediafile" accept="image/png, image/jpeg">
                    <label class="custom-file-label" for="mediafile">Choose file</label>
                </div>
                <input class="btn btn-success ml-2" type="submit" value="Upload">
            </div>

        </div>

    </form>



    @foreach ($media as $medium)

        <div class="card" style="width: 18rem;">
            <img src="{{ $medium->getUrl('card') }}" class="card-img-top" alt="{{$medium->name}}">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    @endforeach

</div>
@endsection
