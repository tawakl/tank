<div class="m-2">
@php
    $attributes=['class'=>'form-control','label'=>trans('categories.title'),'placeholder'=>trans('categories.title')];
@endphp

@include('form.input',['name'=>'title','type'=>'text','attributes'=>$attributes])

{{--    <br>--}}
{{--    <div class="form-group">--}}
{{--            @include('form.input',[--}}
{{--            'name'=>'description',--}}
{{--            'value'=>$row->description,--}}
{{--            'type'=>'textarea',--}}
{{--            'attributes'=>[--}}
{{--                'class'=>'form-control',--}}
{{--                'id'=>'article_content',--}}
{{--                'label'=>trans('categories.description'),--}}
{{--                'placeholder'=>trans('categories.description'),--}}
{{--                ]--}}
{{--            ])--}}

{{--    </div>--}}
</div>
{{--<script>--}}
{{--    // CKEDITOR.replace( 'description' )--}}
{{--    @include('admin.layouts.tinyMCE_config')--}}
{{--    @include("admin.layouts.filemanger_scripts")--}}
{{--</script>--}}
