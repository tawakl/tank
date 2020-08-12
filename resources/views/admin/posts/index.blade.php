@extends('admin.layouts.master')
@section('title')
    <h6 class="slim-pagetitle">

        {{trans('app.List Posts')}}

    </h6>
@endsection
@section('content')
    <div class="p-2">
        <a href="posts/create" class="btn btn-success">
            <i class="fa fa-plus"></i> {{trans('app.Create')}}
        </a>
    </div>
    <section class="section-wrapper">

        <div class="page-title">

        @if(count($rows))
            <div class="x_content">
                <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">{{trans('post.title')}}</th>
                        <th class="text-center">{{trans('post.image')}}</th>
                        <th class="text-center">{{trans('post.created_at')}}</th>
                        <th class="text-center">{{trans('post.action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rows as $row)
                        <tr class="text-center">
                            <td>{{$row->id}}</td>
                            <td>{{$row->title}}</td>
                            <td>
                                <img src="{{asset('storage/'. $row->postimg)}}"
                                     style="width:200px; height:100px">
                            </td>
                            <td>{{$row->created_at}}</td>

                            <td class="center">

                                @if(request('deleted') != 'yes')
                                    <a class="btn btn-success btn-xs" href="{{$module}}/edit/{{$row->id}}" title="{{trans('post.Edit')}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                        <form  class="d-inline" method="POST" title="{{trans('post.delete')}}" action="{{route('posts.delete' , $row->id)}}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button  type="submit" class="btn btn-danger btn-xs" value="Delete celebrities"
                                                     data-confirm="{{trans('post.Are you sure you want to delete this item')}}?">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                @endif
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{ $rows->links() }}
        @else
            <br>
            <div class="alert alert-danger mt-5" role="alert">
                No Data
            </div>
        @endif

    </section>
@endsection
