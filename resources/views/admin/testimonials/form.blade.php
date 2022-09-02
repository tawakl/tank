<div class="m-2">
<div class="form-group">
    @include('form.input',[
    'name'=>'name',
    'value'=>$row->name,
    'type'=>'text',
    'attributes'=>[
        'class'=>'form-control dateTimePicker',
        'label'=>'name',
        'placeholder'=>'name',
        ]
    ])
</div>
<div class="form-group">
    @include('form.input',[
    'name'=>'description',
    'value'=>$row->description,
    'type'=>'textarea',
    'attributes'=>[
        'class'=>'form-control dateTimePicker',
        'id'=>'summary-ckeditor',
        'label'=>'description',
        'placeholder'=>'description',
        ]
    ])

</div>


<div class="form-group">
    <button class="btn btn-primary" type="submit">save</button>
</div>

</div>

