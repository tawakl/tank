{{--    <div class="form-group">--}}
{{--        @foreach(config("translatable.locales") as $lang)--}}
{{--            @include('form.input',['name'=>'title:'.$lang,--}}
{{--                'value'=> $row->translateOrDefault($lang)->title ?? null,--}}
{{--                'type'=>'text','attributes'=>['class'=>'form-control',--}}
{{--                'label'=>trans('categories.title').' '.$lang,--}}
{{--                'placeholder'=>trans('categories.title').' '.$lang,--}}
{{--                'required'=>1 ,--}}
{{--                'max' => 191]])--}}
{{--        @endforeach--}}
{{--    </div>--}}

@php
    $attributes=['class'=>'form-control','label'=>trans('categories.title'),'placeholder'=>trans('categories.title'),'required'=>1];
@endphp

@include('form.input',['name'=>'title','type'=>'text','attributes'=>$attributes])

    <div class="form-group">
            @include('form.input',[
            'name'=>'description',
            'value'=>$row->description,
            'type'=>'textarea',
            'attributes'=>[
                'class'=>'form-control dateTimePicker',
                'id'=>'summary-ckeditor',
                'label'=>trans('categories.description'),
                'placeholder'=>trans('categories.description'),
                ]
            ])

    </div>
