<div class="m-2">
@php
    $attributes=['class'=>'form-control','label'=>trans('post.title'),'placeholder'=>trans('post.title')];
@endphp

@include('form.input',['name'=>'title','type'=>'text','attributes'=>$attributes])
    <br>
@php
    $attributes=['class'=>'form-control','label'=>'client','placeholder'=>'client'];
@endphp

@include('form.input',['name'=>'client','type'=>'text','attributes'=>$attributes])
<br>
@php
    $attributes=['class'=>'form-control','label'=>'website url','placeholder'=>'website url'];
@endphp

@include('form.input',['name'=>'websiteUrl','type'=>'text','attributes'=>$attributes])
<br>
@include('form.input',[
'name'=>'about',
'value'=>$row->about,
'type'=>'textarea',
'attributes'=>[
    'class'=>'form-control dateTimePicker',
    'id'=>'article_content',
    'label'=>'about',
    'placeholder'=>'about',
    ]
])
<br>
@include('form.input',[
'name'=>'mission',
'value'=>$row->mission,
'type'=>'textarea',
'attributes'=>[
    'class'=>'form-control dateTimePicker',
    'id'=>'article_content',
    'label'=>'mission',
    'placeholder'=>'mission',
    ]
])
    <br>
@include('form.file',[
 'name'=>'coverImg',
 'value'=> $row->coverImg,
 'class' => 'form-control',
 'attributes'=>[
 'label'=>'Cover Image',
 'placeholder'=>'Cover Image',
 ]])
<br>
@include('form.file',[
 'name'=>'projectImg',
 'value'=> $row->projectImg,
 'class' => 'form-control',
 'attributes'=>[
 'label'=>'Project Image',
 'placeholder'=>'Project Image',
 ]])

<br>
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
<br>


</div>

