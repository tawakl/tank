@php
    $attributes=['class'=>'form-control','label'=>trans('post.title'),'placeholder'=>trans('post.title')];
@endphp

@include('form.input',['name'=>'title','type'=>'text','attributes'=>$attributes])

@include('form.input',[
    'name'=>'description',
'value'=>$row->description,
'type'=>'textarea',
'attributes'=>[
    'class'=>'form-control dateTimePicker',
    'id'=>'article_content',
    'label'=>trans('post.description'),
    'placeholder'=>trans('post.description'),
    ]
])

@include('form.file',[
 'name'=>'postimg',
 'value'=> $row->postimg,
 'class' => 'form-control',
 'attributes'=>[
 'label'=>trans('post.Picture'),
 'placeholder'=>trans('post.Picture'),
 ]])


@include('form.select',[
    'name'=>'category_id',
    'options'=>$row->getCategories(),
    'attributes'=>[
        'class'=>'form-control select2',
        'required'=>'required',
        'label'=>trans('post.categories'),
        ]
    ]
)
@include('form.select',[
    'name'=>'author_id',
    'options'=>$row->getAuthors(),
    'attributes'=>[
        'class'=>'form-control select2',
        'required'=>'required',
        'label'=>trans('post.author'),
        ]
    ]
)
@if(count($tags))

    @include('form.multiselect',[
    'name'=>'tags[]',
    'options'=>$row->getTags(),
    'selected',
    'attributes'=>[
        'class'=>'form-control select2',
        'required'=>'required',
        'label'=>trans('post.tags'),
        ]
    ]
)
@endif

@include('form.boolean',['value'=> $row->is_active ?? null,'name'=>'is_active','attributes'=>['label'=>trans('post.Is active') ,'required'=>1]])




<script>
    CKEDITOR.replace( 'description' );
    @include('admin.layouts.tinyMCE_config')
    @include("admin.layouts.filemanger_scripts");
</script>
