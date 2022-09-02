@extends('admin.layouts.master')
@section('title')
    <h6 class="slim-pagetitle">
        Create Testimonials
    </h6>
@endsection
@inject('model','App\Blog\Testimonials\Testimonial')
@section('content')

    <div class="section-wrapper">
        <div class="form-layout form-layout-4">
            {!! Form::model($model,[
                'action' => '\App\Blog\Testimonials\Controllers\TestimonialsController@store',
                'enctype' => 'multipart/form-data'
            ]) !!}
{{--            @include('partials.validation_errors')--}}
            @include('admin.testimonials.form')

            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('summary-ckeditor');
    </script>
@endsection

