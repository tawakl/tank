@extends('admin.layouts.master')
@section('title')
    <h6 class="slim-pagetitle">

        {{trans('app.List contacts')}}

    </h6>
@endsection
@section('content')
    <section class="section-wrapper">

        <div class="container bg-white">

        @if(count($rows))
            <div class="table-responsive">
                <table class="table display responsive nowrap">
                    <thead>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">email</th>
                        <th class="text-center">subject</th>
                        <th class="text-center">message</th>
                        <th class="text-center">action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rows as $row)
                        <tr class="text-center">
                            <td>{{$row->name}}</td>
                            <td>{{$row->email}}</td>
                            <td>{{$row->subject}}</td>
                            <td>{!! Str::limit($row->body, 30)!!}</td>
                            <td class="center">

                            <a class="btn btn-success btn-xs" href="contacts/{{$row->id}}" title="{{trans('app.view')}}">
                                <i class="fa fa-eye"></i>
                            </a>
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

