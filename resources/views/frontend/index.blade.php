@extends('layouts.app')
@section('title', 'Wenasa Hotel')
@section('meta_description', 'Wenasa Blog')
@section('meta_keyword', 'Wenasa Blog')
@section('content')

    <div class="bg-danger py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="owl-carousel category-carousel owl-theme">
                        @foreach ($all_categories as $all_cate_item)
                            <div class="item">
                                <a href="{{ url('category/' . $all_cate_item->slug) }}" class="text-decoration-none">
                                    <div class="card">
                                        <img src="{{ asset('uploads/category/' . $all_cate_item->image) }}" alt="Image">
                                        <div class="card-body text-center">
                                            <h5 class="text-dark">{{ $all_cate_item->name }}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

