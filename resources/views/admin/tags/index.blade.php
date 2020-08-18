@extends('admin.layouts.master')
@section('title')
    <h6 class="slim-pagetitle">

        {{trans('app.List Tags')}}

    </h6>
@endsection
@section('content')
    <a href="tags/create" class="btn btn-success">
        <i class="fa fa-plus"></i> {{trans('app.Create')}}
    </a>
    <section class="section-wrapper">

        <div class="container bg-white">

        @if(count($rows))
            <div class="table-responsive">
                <table class="table display responsive nowrap">
                    <thead>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rows as $row)
                        <tr class="text-center">
                            <td>{{$row->title}} <span class="badge badge-primary ml-2">{{$row->posts->count()}}</span></td>
                            <td class="center">

                                @if(request('deleted') != 'yes')
                                    <a class="btn btn-success btn-xs" href="{{$module}}/edit/{{$row->id}}" title="{{trans('tags.Edit')}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                        <form  class="d-inline" method="POST" action="{{route('tags.delete' , $row->id)}}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button  type="submit" class="btn btn-danger btn-xs" value="Delete celebrities"
                                                     data-confirm="{{trans('tags.Are you sure you want to delete this item')}}?">
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

