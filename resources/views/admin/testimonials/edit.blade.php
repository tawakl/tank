@extends('admin.layouts.master')
@section('title')
    <h6 class="slim-pagetitle">
        Edit Testimonials
    </h6>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="section-wrapper">
            <div class="form-layout form-layout-4">
                {!! Form::model($row,[
                    'action' => ['\App\Blog\Testimonials\Controllers\TestimonialsController@update',$row->id],
                    'method' => 'put',
                    'enctype' => 'multipart/form-data'
                ]) !!}
{{--                @include('partials.validation_errors')--}}
                @include('admin.testimonials.form')
                {!! Form::close() !!}

            </div>
        </div>


    </section>
    <!-- /.content -->
@endsection


@section('scripts')
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('summary-ckeditor');
    </script>
@endsection
