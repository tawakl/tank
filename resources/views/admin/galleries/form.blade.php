<div class="m-2">


@include('form.file',[
 'name'=>'image',
 'value'=> $row->image,
 'class' => 'form-control',
 'attributes'=>[
 'label'=>'image',
 'placeholder'=>'image',
 ]])

<br>

@include('form.select',[
    'name'=>'project_id',
    'options'=>$row->getProjects(),
    'attributes'=>[
        'class'=>'form-control select2',
        'required'=>'required',
        'label'=>'project',
        ]
    ]
)
<br>
</div>

