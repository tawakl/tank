
@php
$attributes=['class'=>'form-control','label'=>trans('users.Name'),'placeholder'=>trans('users.Name'),'required'=>1];
@endphp

@include('form.input',['name'=>'name','type'=>'text','attributes'=>$attributes])
@php
    $attributes=['class'=>'form-control','label'=>trans('users.Email'),'placeholder'=>trans('users.Email')];
@endphp

@include('form.input',['name'=>'email','type'=>'email','attributes'=>$attributes])


@php
$attributes=['class'=>'form-control','label'=>trans('users.Mobile'),'placeholder'=>trans('users.Mobile'),'required'=>1];
@endphp
@include('form.input',['name'=>'mobile_number','type'=>'text','attributes'=>$attributes])


@php
$attributes=['class'=>'form-control','label'=>trans('users.password'),'placeholder'=>trans('users.password'),'stared'=>1];
@endphp
@include('form.password',['name'=>'password','attributes'=>$attributes])

@php
$attributes=['class'=>'form-control','label'=>trans('users.password_confirmation'),'placeholder'=>trans('users.password_confirmation'),'stared'=>1];
@endphp
@include('form.password',['name'=>'password_confirmation','attributes'=>$attributes])


