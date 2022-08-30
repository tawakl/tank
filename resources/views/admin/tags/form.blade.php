<div class="m-2">

@php
    $attributes=['class'=>'form-control','label'=>trans('tags.title'),'placeholder'=>trans('tags.title')];
@endphp

@include('form.input',['name'=>'title','type'=>'text','attributes'=>$attributes])
</div>
