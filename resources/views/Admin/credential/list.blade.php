@extends('Admin.layouts.master')
@section('content')
<!-- BEGIN: Subheader -->
<div class="sub-header">
    <div class="m-container">
        <div>
            <h3 class="m-subheader__title text-center"><i class="la la-users"></i> {{ $title }}</h3>
        </div>
    </div>
</div>

<!-- END: Subheader -->

<!-- end::Header -->

<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop 	m-container m-container--responsive m-container--xxl m-page__container m-body">
    <div class="m-grid__item m-grid__item--fluid m-wrapper">

        <div class="m-content">
            <div class="m-portlet m-portlet--mobile dt-container">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                {{ $title }}
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                            </li>
                            <li class="m-portlet__nav-item"></li>
                            <li class="m-portlet__nav-item">
                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                    <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                        <i class="la la-ellipsis-h m--font-brand"></i>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav">
                                                        <li class="m-nav__section m-nav__section--first">
                                                            <span class="m-nav__section-text">Quick Actions</span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">Create Post</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">Send Messages</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-multimedia-2"></i>
                                                            <span class="m-nav__link-text">Upload File</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__section">
                                                            <span class="m-nav__section-text">Useful Links</span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">FAQ</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">Support</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit m--hide">
                                                        </li>
                                                        <li class="m-nav__item m--hide">
                                                            <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>				
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Username</th>
                                <th>Course Name</th>
                                <th>Course Date</th>
                                <th>Country</th>
                                <th>Trainer Name</th>
                                <th>Trainer ID Number</th>
                                <th>AInP Name</th>
                                <th>AInP License</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                
                        <tbody>
                            @foreach($credentials as $credential)
                            <tr>
                                <td>{{ $credential->id }}</td>
                                <td>{{ $credential->user_id }}</td>
                                <td>{{ $credential->course_name }}</td>
                                <td>{{ $credential->course_date }}</td>
                                <td>{{ $credential->country_code }}</td>
                                <td>{{ $credential->trainer_name }}</td>
                                <td>{{ $credential->trainer_id }}</td>
                                <td>{{ $credential->AInP_name }}</td>
                                <td>{{ $credential->AInP_licence }}</td>
                                <td nowrap>{{ $credential->id }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
    $deleteurl = url('admin/credential/delete/');
?>
<!-- end:: Page -->
@endsection
@section('after_script')
<script>
$.ajaxSetup({
    beforeSend: function(xhr, type) {
        if (!type.crossDomain) {
            xhr.setRequestHeader('X-CSRF-Token', '{{ csrf_token() }}');
        }
    },
});

var DatatablesBasicHeaders={
    init:function(){
        $("#m_table_1").DataTable({
            responsive:!0,
            columnDefs:[{
                    targets:0,
                    width:"30px",
                    className:"dt-right",
                    orderable:!1,
                    render:function(e,a,t,n){
                        return'\n                        <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">\n                            <input type="checkbox" value="" class="m-checkable">\n                            <span></span>\n                        </label>'
                    }
                },
                {
                    targets:-1,
                    title:"Actions",
                    orderable:!1,
                    render:function(e,a,t,n){
                        return'<a href="{{ $deleteurl }} class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">\n                          <i class="la la-trash"></i>\n                        </a>'
                    }
                }]
        })
    }
};jQuery(document).ready(function(){DatatablesBasicHeaders.init()});
</script>
@endsection