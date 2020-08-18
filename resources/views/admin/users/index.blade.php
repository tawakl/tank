@extends('admin.layouts.master')
@section('title')
    <h6 class="slim-pagetitle">
        {{ @$page_title }}
    </h6>
@endsection

@section('content')
    <a href="users/create" class="btn btn-success">
        <i class="fa fa-plus"></i> {{trans('app.Create')}}
    </a>
    <div class="section-wrapper">

            @if (!$rows->isEmpty())
                <div class="container bg-white">
                <div class="table-responsive">
                    <table class="table display responsive nowrap dataTable">
                        <thead>
                        <tr>
                            <th class="wd-10p">{{trans('users.ID')}} </th>
                            <th class="wd-15p">{{trans('users.Name')}} </th>
                            <th class="wd-15p">{{trans('users.Email')}} </th>
                            <th class="wd-15p">{{trans('users.Mobile')}} </th>
                            <th class="wd-15p">{{trans('users.Created at')}}</th>
                            <th class="wd-15p"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($rows as $row)
                            <tr>
                                <td class="center">{{$row->id}}</td>
                                <td class="center">{{$row->name}}</td>
                                <td class="center">{{$row->email}}</td>
                                <td class="center">{{$row->mobile_number}}</td>
                                <td class="center">{{$row->created_at}}</td>
                                <td class="center">
                                    <a class="btn btn-primary btn-xs" href="{{$module}}/view/{{$row->id}}" title="{{trans('users.View')}}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    @if(request('deleted') != 'yes')
                                        <a class="btn btn-success btn-xs" href="{{url('users/edit', $row->id)}}" title="{{trans('users.Edit')}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                            <form class="d-inline" method="POST" action="{{route('users.delete', $row->id)}}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger btn-xs" value="Delete Station"
                                                        data-confirm="{{trans('users.Are you sure you want to delete this item')}}?">
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
            @else
                        <p class="text-center text-bold"> {{trans("users.There is no results")}}</p>
            @endif
                </div>
        <br>
        {{ $rows->links() }}
    </div>

@endsection
