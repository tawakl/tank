@extends('admin.layouts.master')
@section('title')
<h6 class="slim-pagetitle">
    {{ @$page_title }}
</h6>
@endsection
@section('content')
<div class="section-wrapper">
    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" border="0" style="  table-layout: fixed;" class="table table-striped table-bordered pull-left">

            <tr>
                <td width="25%" class="align-left">{{trans('app.name')}}</td>
                <td width="75%" style="word-wrap: break-word;" class="align-left">{!!@$row->name!!}</td>

            </tr>

            <tr>
                <td width="25%" class="align-left">{{trans('app.email')}}</td>
                <td width="75%" style="word-wrap: break-word;" class="align-left">{!!@$row->email!!}</td>

            </tr>

            <tr>
                <td width="25%" class="align-left">{{trans('app.subject')}}</td>
                <td width="75%" style="word-wrap: break-word;" class="align-left">{!!@$row->subject!!}</td>

            </tr>

            <tr>
                <td width="25%" class="align-left">{{trans('app.message')}}</td>
                <td width="75%" style="word-wrap: break-word;" class="align-left">{!!@$row->body!!}</td>
            </tr>

        </table>
    </div>
</div>
@endsection
