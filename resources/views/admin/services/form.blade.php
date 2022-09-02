<div class="m-2">
@php
    $attributes=['class'=>'form-control','label'=>'title','placeholder'=> 'title'];
@endphp

@include('form.input',['name'=>'title','type'=>'text','attributes'=>$attributes])
    <br>
@php
    $attributes=['class'=>'form-control','label'=>'subtext','placeholder'=> 'subtext'];
@endphp

@include('form.input',['name'=>'subtext','type'=>'text','attributes'=>$attributes])

    <br>
    <div class="form-group">
            @include('form.input',[
            'name'=>'description',
            'value'=>$row->description,
            'type'=>'textarea',
            'attributes'=>[
                'class'=>'form-control',
                'id'=>'article_content',
                'label'=>'description',
                'placeholder'=>'description',
                ]
            ])

    </div>
    <br>
    @include('form.file',[
     'name'=>'image',
     'value'=> $row->image,
     'class' => 'form-control',
     'attributes'=>[
     'label'=> 'image',
     'placeholder'=>'image',
     ]])
</div>
<script>
    // CKEDITOR.replace( 'description' )
    @include('admin.layouts.tinyMCE_config')
    @include("admin.layouts.filemanger_scripts")
</script>
