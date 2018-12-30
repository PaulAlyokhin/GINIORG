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
                                <a href="#new_seo" class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air" data-toggle="modal">
                                    <span>
                                        <i class="la la-plus"></i>
                                        <span>New SEO Description</span>
                                    </span>
                                </a>
                                <style type="text/css">
                                    form .form-group.d-flex {
                                        align-items: center;
                                    }
                                </style>
                                <div class="modal fade" id="new_seo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">New SEO Description</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ url('admin/seo/postNew') }}" method="POST" id="editform">
                                            <div class="modal-body">
                                                @csrf
                                                <input type="hidden" name="seo_id" id="seo_id"/>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group d-flex">
                                                            <label for="">Page:</label>
                                                            <select class="form-control" name="page_id" id="page_id">
                                                                <option value="0"> Select a Page </option>
                                                            @foreach($pages as $page)
                                                                <option value="{{ $page->id }}">{{ $page->title }}</option>
                                                            @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group d-flex">
                                                            <label for="">Title:</label>
                                                            <input type="text" name="title" id="title" class="form-control">
                                                        </div>
                                                        <div class="form-group d-flex">
                                                            <label for="">Meta Keywords:</label>
                                                            <textarea name="meta_keywords" id="meta_keywords" class="form-control" rows="10"></textarea>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
                                <th>Page</th>
                                <th>Title</th>
                                <th>Meta Keywords</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                
                        <tbody>
                            @foreach($seos as $seo)
                            <tr>
                                <td>{{ $seo->id }}</td>
                                <td>{{ $seo->page_id }}</td>
                                <td>{{ $seo->title }}</td>
                                <td>{{ $seo->meta_keywords }}</td>
                                <td nowrap>{{ $seo->id }}</td>
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
    $editurl = url('admin/seo/edit/');
    $deleteurl = url('admin/seo/delete/');
    $getinfourl = url('admin/seo/getinfo/');
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
                        return'<span class="dropdown">\n                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">\n                              <i class="la la-ellipsis-h"></i>\n                            </a>\n                            <div class="dropdown-menu dropdown-menu-right">\n                                <a class="dropdown-item" href="javascript:editseo('+e+')"><i class="la la-edit"></i> Edit Details</a>\n                                <a class="dropdown-item" href="{{ $deleteurl }}/'+e+'"><i class="la la-trash"></i> Delete</a>\n                            </div>\n                        </span>\n                        <a href="javascript:editseo('+e+')" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Edit">\n                          <i class="la la-edit"></i>\n                        </a>'
                    }
                }]
        })
    }
};jQuery(document).ready(function(){DatatablesBasicHeaders.init()});
function editseo(id){
    $.ajax({
        type: "POST",
        url: '{{ $getinfourl }}',
        data: { 'id': id, },
        success: function (data) {
            $('#seo_id').val(data['id']);
            $('#page_id').val(data['page_id']);
            $('#title').val(data['title']);
            $('#meta_keywords').text(data['meta_keywords']);
            $('#editform').attr('action', '{{ $editurl }}');
            $('#new_seo').modal();
        },
        error: function (data, textStatus, errorThrown) {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
                };

            toastr.error("There's an error in connection!");
        },
    });
}
</script>
@endsection