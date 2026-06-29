@extends('layout.layout')

@section('title', 'Add Post')

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offest-md-3">
                    <div class="card">

                        <div class="card-header">
                            Add new Post
                        </div>

                        <div class="card-body">
                            <a href="{{ route('post.getallpost')}}" class="btn btn-primary mb-3">Back to Posts</a>
                            
                            @if(Session::has('post_created'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('post_created')}}
                                </div>
                            @endif
                            <form method="post" action="{{route('post.addsubmit')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Post Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter Post Title">
                                </div>
                                <div class="form-group">
                                    <label for="body">Post Description</label>
                                    <textarea class="form-control" name="body" rows="3"></textarea>
                                </div>
                                <input type="submit" class="btn btn-success" value="Submit">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
