@extends('admin.layouts.master')
@section('title')
<h6 class="slim-pagetitle">
    {{ @$page_title }}
</h6>
@endsection
@section('content')
<div class="section-wrapper">
    <div class="form-layout form-layout-4">
        {!! Form::model($row,['method' => 'POST', 'files' => true] ) !!}
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $row->id }}">
        @php
        $attributes=['class'=>'form-control','label'=>'First name','placeholder'=>'First name','required'=>1];
        @endphp
        @include('form.input',['name'=>'name','type'=>'text','attributes'=>$attributes])
        <br>
        @php
        $attributes=['class'=>'form-control','label'=>'Email','placeholder'=>'Email','required'=>1];
        @endphp
        @include('form.input',['name'=>'email','type'=>'email','attributes'=>$attributes])
        <br>
        @php
        $attributes=['class'=>'form-control','label'=>'mobile_number','placeholder'=>'mobile_number','required'=>1];
        @endphp
        @include('form.input',['name'=>'mobile_number','type'=>'text','attributes'=>$attributes])

{{--        <br>--}}
{{--        @php--}}
{{--            $attributes=['label'=>trans('user.image')];--}}
{{--        @endphp--}}
{{--        @include('form.normalFile',['name'=>'image','attributes'=>$attributes])--}}

        <br>
        @php
        $attributes=['class'=>'form-control','label'=>'Password','placeholder'=>'Password'];
        @endphp
        @include('form.password',['name'=>'password','attributes'=>$attributes])
        <br>
        @php
        $attributes=['class'=>'form-control','label'=>'Password confirmation','placeholder'=>'Password confirmation'];
        @endphp
        @include('form.password',['name'=>'password_confirmation','attributes'=>$attributes])

        <br>
        <!-- custom-file -->
        <div class="form-layout-footer mg-t-30">
            <button class="btn btn-primary bd-0">Save </button>
        </div>
        {!! Form::close() !!}
        <!-- form-layout-footer -->
    </div>
    <!-- form-layout -->
</div>
@endsection
