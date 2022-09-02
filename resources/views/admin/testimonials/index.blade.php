@extends('admin.layouts.master')
@section('title')
    <h6 class="slim-pagetitle">

        {{trans('app.List Testimonials')}}

    </h6>
@endsection

@section('content')
    <a href="testimonials/create" class="btn btn-success">
        <i class="fa fa-plus"></i> {{trans('app.Create')}}
    </a>
    <section class="section-wrapper">
        @if(count($records))
            <div class="x_content">
                <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">name</th>
                        <th class="text-center">description</th>
                        <th class="text-center">created_at</th>
                        <th class="text-center">action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($records as $record)
                        <tr class="text-center">
                            <td>{{$record->id}}</td>
                            <td>{{$record->name}}</td>
                            <td>{!! $record->description !!}</td>
                            <td>{{$record->created_at}}</td>
                            <td class="w_20">
                                <a href="{{url('testimonials/edit',$record->id)}}" class="btn btn-info btn-xs">
                                    <i class="fa fa-edit"></i>
                                </a>

                                {!! Form::open([
                                'action' => ['\App\Blog\Testimonials\Controllers\TestimonialsController@destroy',$record->id],
                                'method' => 'delete',
                                'class' =>'d-inline',


                                 ]) !!}
                                <button type="submit" class="btn btn-danger btn-xs delete-btn "><i
                                            class="fa fa-trash"></i></button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{ $records->links() }}

        @else
            <br>
            <div class="alert alert-danger mt-5" role="alert">
                No Data
            </div>
        @endif


    </section>




@endsection

@section('scripts')
    @parent


    <script type="text/javascript">
        $('button.delete-btn').on('click', function (e) {
            e.preventDefault();
            var self = $(this);
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, Cancel delete!",

            }).then((result) => {
                if (result.value) {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                    setTimeout(function () {
                        self.parents("form").submit();
                    }, 1000);
                }


            });
        });


    </script>

@endsection
