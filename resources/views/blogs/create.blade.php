@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Blog</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Create new blog</h3>
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                         <label for="title">Title</label>
                            <input type="title" name="title" class="form-control" id="title">
                        </div>
                        <div class="form-group">
                            <label for="body">Introduction to Blog</label>
                            <input type="body" name="body" class="form-control" id="body">
                        </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
