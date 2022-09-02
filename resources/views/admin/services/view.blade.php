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
                <td width="10%" class="align-left">title</td>
                <td width="90%" style="word-wrap: break-word;" class="align-left">{!!@$row->title!!}</td>

            </tr>

            <tr>
                <td width="10%" class="align-left">sub text</td>
                <td width="90%" style="word-wrap: break-word;" class="align-left">{!!@$row->subtext!!}</td>

            </tr>
<tr></tr>
            <tr></tr>

            <tr>
                <td width="25%" class="align-left">description</td>
                <td width="75%" style="word-wrap: break-word;" class="align-left">{!!@$row->description!!}</td>
            </tr>

        </table>
    </div>
</div>
@endsection
