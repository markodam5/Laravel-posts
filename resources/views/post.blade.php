    @extends('layout.layout')

    @section('title', 'Posts')

    @section('content')
    
    <section>
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-12">
                    <a href="{{ route('post.add') }}" class="btn btn-success">Add Post</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            All Posts
                        </div>
                        <div class="card-body">
                            @if(Session::has('post_deleted'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('post_deleted')}}
                                </div>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Post Title</th>
                                        <th>Post Body</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{{ \Illuminate\Support\Str::limit($post->title, 50) }}</td>
                                            <td>{{ \Illuminate\Support\Str::limit($post->body, 50) }}</td>
                                            <td>
                                                <a href="/posts/{{$post->id}}" class="btn btn-success">View</a>
                                                <a href="/edit-post/{{$post->id}}" class="btn btn-info">Edit</a>
                                                <a href="/delete-post/{{$post->id}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 @endsection
