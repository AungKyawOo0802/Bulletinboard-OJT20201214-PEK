@extends("layouts.app")
@section("content")
   <div class="container">
        <h2>Crate post</h2>
        <form action="{{ url('posts/add/confirm') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" placeholder="Enter Title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" placeholder="Enter Description" class="form-control" required></textarea>
            </div>
            <button class="btn btn-success">Confirm</button>
            <button class="btn btn-danger" type="reset">Clear</button>
        </form>
   </div>
@endsection