<div class="form-group">
    @include('form.input',[
    'name'=>'title',
    'value'=>$row->Title,
    'type'=>'text',
    'attributes'=>[
        'class'=>'form-control dateTimePicker',
        'label'=>trans('testimonial.title'),
        'placeholder'=>trans('testimonial.title'),
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
        'label'=>trans('testimonial.description'),
        'placeholder'=>trans('testimonial.description'),
        ]
    ])

</div>

<div class="form-group">
    @include('form.file',[
     'name'=>'testimonialimg',
     'value'=> $row->testimonialimg,
     'class' => 'form-control',
     'attributes'=>[
     'label'=>trans('testimonial.Picture'),
     'required'  => ($row->id ? false : true),
     ]])
</div>

<div class="form-group">
    <button class="btn btn-primary" type="submit">save</button>
</div>



{{--@section('styles')--}}
    {{--@parent--}}
    {{--{{ Html::style(mix('assets/admin/css/users/edit.css')) }}--}}
{{--@endsection--}}

{{--@section('scripts')--}}
    {{--@parent--}}
    {{--{{ Html::script(mix('assets/admin/js/users/edit.js')) }}--}}
{{--@endsection--}}
