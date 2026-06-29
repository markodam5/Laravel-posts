@extends('layout.layout')

@section('title', 'View Post')

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offest-md-3">
                    <div class="card">

                        <div class="card-header">
                            Post Details
                        </div>

                        <div class="card-body">
                            <a href="{{ route('post.getallpost')}}" class="btn btn-primary mb-3">Back to Posts</a>
                            
                            <form>
                                <div class="form-group">
                                    <label for="title">Post Title</label>
                                    <input type="text" name="title" class="form-control" value="{{$post->title}}" placeholder="Enter Post Title">
                                </div>
                                <div class="form-group">
                                    <label for="body">Post Description</label>
                                    <textarea class="form-control" name="body" rows="3">{{$post->body}}</textarea>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
