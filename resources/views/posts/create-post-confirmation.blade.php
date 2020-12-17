@extends("layouts.app")
@section("content")
    <!-- {{ $posts->title }} -->
    <div class="container mb-3">
        <h3 >Create Post Confirmation</h3>
        <div class="row mb-3 mt-5">
            <div class="col-3"><b>Title</b></div>
            <div class="col"> {{ $posts->title }} </div>
        </div>
        <div class="row mb-5">
            <div class="col-3"><b>Description</b></div>
            <div class="col"> {{ $posts->description }} </div>
        </div>
        <a href="#" class="btn btn-primary mr-4"><i class="fas fa-save"></i> Create</a>
        <a href="{{ url('/posts') }}" class="btn btn-danger ml-4"><i class="fas fa-window-close"></i> Cancel</a>
    </div>
    
@endsection