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
    'id'=>'summary-ckeditor',
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
 'required'  => ($row->id ? false : true),
 ]])
{{--<div>--}}
{{--    <label>post img</label>--}}
{{--    <input type="file" name="postimg" value="$row->postimg">--}}
{{--</div>--}}

@include('form.select',[
    'name'=>'category_id',
    'options'=>$row->getCategories(),
    'attributes'=>[
        'class'=>'form-control select2',
        'required'=>'required',
        'label'=>trans('post.categories'),
        'id' => 'roles'
        ]
    ]
)

@include('form.boolean',['value'=> $row->is_active ?? null,'name'=>'is_active','attributes'=>['label'=>trans('post.Is active') ,'required'=>1]])




<script>
    CKEDITOR.replace( 'description' );
</script>
