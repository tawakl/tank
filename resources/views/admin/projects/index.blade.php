@extends('admin.layouts.master')
@section('title')
    <h6 class="slim-pagetitle">

        Projects

    </h6>
@endsection
@section('content')
    <div class="p-2">
        <a href="projects/create" class="btn btn-success">
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
                        <th class="text-center">Category</th>
                        <th class="text-center">Client</th>
                        <th class="text-center">Website Url</th>
                        <th class="text-center">{{trans('post.created_at')}}</th>
                        <th class="text-center">{{trans('post.action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rows as $row)
                        <tr class="text-center">
                            <td>{{$row->id}}</td>
                            <td>{{$row->title}}</td>
                            <td>{{$row->category->title}}</td>
                            <td>{{$row->client}}</td>
                            <td>
                                <a href="{{$row->websiteUrl}}" target="_blank" rel="noopener">{{$row->websiteUrl}}<span class="pi-list-icon"></span></a>
                            </td>
                            <td>{{$row->created_at}}</td>
                            <td class="center">

                                @if(request('deleted') != 'yes')
                                    <a class="btn btn-success btn-xs" href="{{$module}}/edit/{{$row->id}}" title="{{trans('post.Edit')}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                        <form  class="d-inline" method="POST" title="{{trans('post.delete')}}" action="{{route('projects.delete' , $row->id)}}">
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
                <p class="text-center text-bold"> {{trans("users.There is no results")}}</p>

        @endif
        </div>
    </section>
@endsection
