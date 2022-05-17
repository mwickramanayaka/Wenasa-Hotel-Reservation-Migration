@extends('layouts.app')
@section('title', "$post->meta_title")
@section('meta_description', "$post->meta_description")
@section('meta_keyword', "$post->meta_keyword")
@section('content')
    <div class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="category-heading">
                        <h4 class="mb-0">{!! $post->name !!} </h4>
                    </div>
                    <div class="mt-3">
                        <h6>{{ $post->category->name . '  /  ' . $post->name }}</h6>
                    </div>
                    <div class="card card-shadow mt-4">
                        <div class="card-body .post-description" >
                            {!! $post->description !!}
                        </div>
                    </div>
                     <div class="comment-area mt-4">
                         <div class="card card-body">
                             <h6 class="card-title">Leave a Comment</h6>
                             <form action="" method="POST">
                                 <textarea name="comment_body" class="form-control" rows="3" required></textarea>
                                 <button type="submit" class="btn btn-primary mt-4">Submit</button>
                             </form>
                         </div>
                         <div class="card card-body shadow-sm mt-3">
                             <div class="detail-area">
                                 <h6 class="user_name mb-1">
                                     User 
                                         <small class="ms-3 text-primary">Commented on: 3-8-2022</small>
                                 </h6>
                                 <p class="user_comment mb-1">
                                     How to use blade.php file in a laravel framework
                                 </p>
                             </div>
                             <div>
                                 <a href="" class="btn btn-primary btn-sm me-2">Edit</a>
                                 <a href="" class="btn btn-danger btn-sm me-2">Delete</a>
                             </div>
                         </div>
                     </div>
                </div>
                <div class="col-md-4">
                    <div class="card mt-3">
                        <div class="card-header">
                            <h4>Latest Posts</h4>
                        </div>
                        <div class="card-body">
                            @foreach ($latest_posts as $latest_post_item)
                                <a href="{{ url('category/'.$latest_post_item->category->slug.'/'.$latest_post_item->slug) }}" class="text-decoration-none">
                                    <h6> > {{ $latest_post_item->name }}</h6>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
