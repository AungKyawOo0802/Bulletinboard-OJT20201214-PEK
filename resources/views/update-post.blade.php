@extends("layouts.app")
@section("content")
    <div class="container">
        <h2>Update Post </h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea type="text" id="description" class="form-control" ></textarea>
            </div>
            <div class="form-group">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="status" checked>
                <label class="custom-control-label" for="status">Status</label>
            </div>
            </div>
            <input type="submit" value="update" class="btn btn-primary">
            <input type="submit" value="Clear" id="clear" class="btn btn-danger">
            
        </form>

    </div>
@endsection