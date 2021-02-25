@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between">
            <div>
                <h4>All Post</h4>
                <hr>
            </div>

            <div>
                <a href="/posts/create" class="btn btn-primary">New Post</a>
            </div>
        </div>
        <div class="row">
        <hr>
            @forelse ($posts as $post)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            {{$post->title}}
                        </div>
                        <div class="card-body">
                            {{Str::limit($post->body, 100, '...')}}
                            <br>
                            <a href="/posts/{{$post->slug}}">Read More</a>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            Published on {{$post->created_at->format("d F, Y")}}
                            {{-- format tanggal menjadi normal = format("d F, Y") --}}
                            {{-- format tanggal menjadi 1 week ago = diffForHumans --}}

                            <a href="/posts/{{$post->slug}}/edit" class="btn btn-sm btn-info">Update</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-primary">
                    There's no post.
                </div>
            @endforelse
            
        </div>

        <div class="d-flex justity-content-center">
            <div>
                {{$posts->links()}}
            </div>
        </div>
    </div>
@endsection