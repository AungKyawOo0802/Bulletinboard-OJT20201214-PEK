@extends("layouts.app")
@section("content")
   <div class="container">
        <h2>Create post</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" placeholder="Enter Title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="desctiption">Description</label>
                <textarea name="desctiption" id="desctiption" placeholder="Enter Description" class="form-control" required></textarea>
            </div>
            <input type="submit" class="btn btn-success">Confirm</input>
            <button class="btn btn-danger">Clear</button>
        </form>
   </div>
@endsection