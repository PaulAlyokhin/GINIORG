@extends('Admin.layouts.master')
@section('after_style')
<link href="{{ url('admin_assets/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<!-- BEGIN: Subheader -->
<div class="sub-header">
    <div class="m-container">
        <div>
            <h3 class="m-subheader__title text-center">
               <i class="la la-file-text-o"></i> ASSIGN CERTIFICATES
            </h3>
        </div>
    </div>
</div>

<!-- END: Subheader -->
<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop    m-container m-container--responsive m-container--xxl m-page__container m-body inner">
    <!--Begin::Section-->
    <div class="row w-100">
        <div class="col-12">
            <div class="m-portlet m-portlet--mobile dt-container">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Assign Certificates
                            </h3>
                        </div>
                    </div>
                </div>
                    <div class="assign-certificate-top-menu">
                        <form action="">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group d-flex justy-center">
                                        <label style="max-width: 112px;" for="">Select User:</label>
                                        <select name="user_id" id="user_id" class="form-control">
                                            @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->username }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group d-flex justy-center">
                                        <label style="max-width: 112px;" for="">Select Certificates:</label>
                                        <select name="certificate_type" id="certificate_type" class="form-control">
                                            @foreach($certificates as $certificate)
                                            <option value="{{ $certificate->id }}">{{ $certificate->certificate_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group d-flex justy-center">
                                        <label style="max-width: 112px;" for="">Select Issue Date:</label>
                                        <input id="datepicker" name="issue_date" style="max-width: 100%;width: 100;" class="form-control"/>
                                        <button class="form-popup-submit" style="padding: 10px 15px;">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <hr class="ab-p">
                <div class="search-feild">
                    <div class="btn-area">
                        <a href="#newform" class="btn-add-new" data-toggle="modal">
                            <i class="fas fa-plus"></i>
                            Add New
                        </a>
                        <style type="text/css">
                            form .form-group.d-flex {
                                align-items: center;
                            }
                        </style>
                        <div class="modal fade" id="newform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Assign New Certificate</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ url('admin/certificates/assignNew') }}" method="POST">
                                    <div class="modal-body">
                                        @csrf
                                        <div class="form-group mw-fixed">
                                            <label class="fl-l" for="">User Type:</label>
                                            @foreach($user_types as $user_type)
                                            <div class="radio">
                                            <label><input type="radio" name="user_type" value="{{ $user_type->id }}" checked>{{ $user_type->role_name }}</label>
                                            </div>
                                            @endforeach
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group d-flex">
                                            <label for="">Name:</label>
                                            <input type="text" name="username" class="form-control">
                                        </div>
                                        <div class="form-group d-flex">
                                            <label for="">Membership ID:</label>
                                            <input type="text" name="membership_id" class="form-control">
                                        </div>
                                        <div class="form-group d-flex">
                                            <label for="">Certificate:</label>
                                            <select name="certificate_type" id="certificate_type" class="form-control">
                                                @foreach($certificates as $certificate)
                                                <option value="{{ $certificate->id }}">{{ $certificate->certificate_name }}</option>
                                                @endforeach
                                            </select>
                                        </div> 
                                        <div class="form-group d-flex">
                                            <label for="">Certificate Number:</label>
                                            <input type="text" name="certificate_number" class="form-control">
                                        </div> 
                                        <div class="form-group d-flex">
                                            <label for="">Issue Date:</label>
                                            <input type="text" name="issue_date" class="form-control" placeholder="Issue Date" id="m_datepicker_4_3">
                                        </div> 
                                        <div class="form-group d-flex">
                                            <label for="">Expiry Date:</label>
                                            <input type="text" name="expiry_date" class="form-control" placeholder="Expriry Date" id="m_datepicker_4_4">
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
                    </div>
                    <div class="search-feild-main">
                        <form action="">
                            <div class="from-element d-flex">
                                <input type="text" placeholder="Search.." class="srch form-control">
                                <button class="srch">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="m-portlet__body">

                    <!--begin: Datatable -->
                    <div class="m_datatable" id="m_datatable_latest_orders"></div>

                    <!--end: Datatable -->
                </div>
            </div>
        </div>
    </div>

    <!--End::Section-->
</div>

<?php
$edit_url = url('/admin/certificates/edit/');
$delete_url = url('/admin/certificates/delete/');
$ajax_url = url('/admin/certificates/get/');
?>
<!-- end::Body -->
@endsection
@section('after_script')
<script src="{{ url('admin_assets/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>

<!-- date-picker -->
<!--<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>-->
<script>
$('#datepicker').datepicker({orientation:"bottom left",todayHighlight:!0,});
</script>
<script>
$.ajaxSetup({
    beforeSend: function(xhr, type) {
        if (!type.crossDomain) {
            xhr.setRequestHeader('X-CSRF-Token', '{{ csrf_token() }}');
        }
    },
});
var certificate_list={
    init:function(){
        $("#m_datatable_latest_orders").length && $(".m_datatable").mDatatable({
            data: {
                type: "remote",
                source: {
                    read: {
                        url: "{{ url('admin/certificates/getAllAssigns') }}"
                    }
                },
                pageSize: 10,
                saveState: {
                    cookie: !1,
                    webstorage: !0
                },
                serverPaging: !0,
                serverFiltering: !0,
                serverSorting: !0
            },
            layout: {
                theme: "default",
                class: "",
                scroll: !0,
                height: 380,
                footer: !1
            },
            sortable: !0,
            filterable: !1,
            pagination: !0,
            columns: [{
                field: "id",
                title: "S. No.",
                sortable: !1,
                width: 40,
                responsive: {
                    visible: "lg"
                },
                textAlign: "center"
            }, {
                field: "user_type",
                title: "User Type",
                responsive: {
                    visible: "lg"
                }
            }, {
                field: "name",
                title: "Name",
                responsive: {
                    visible: "lg"
                }
            }, {
                field: "certificate_type",
                title: "Certificate",
                responsive: {
                    visible: "lg"
                }
            }, {
                field: "certificate_number",
                title: "Certificate Number",
                responsive: {
                    visible: "lg"
                }
            }, {
                field: "issue_date",
                title: "Issue Date",
                responsive: {
                    visible: "lg"
                }
            }, {
                field: "expiry_date",
                title: "Expiry Date",
                responsive: {
                    visible: "lg"
                }
            }, {
                field: "status",
                title: "Status",
                width: 80,
                template: function (e) {
                    var t = {
                        1: {
                            title: "Active",
                            class: "m-badge--brand"
                        },
                        2: {
                            title: "Expired",
                            class: " m-badge--primary"
                        },
                    };
                    return '<span class="m-badge ' + t[e.status].class + ' m-badge--wide">' + t[e.status].title + "</span>"
                }
            }]
        })
    }
};jQuery(document).ready(function () {
    certificate_list.init()
    $("#m_datepicker_4_3").datepicker({orientation:"bottom left",todayHighlight:!0,});
    $("#m_datepicker_4_4").datepicker({orientation:"bottom left",todayHighlight:!0,});
});
</script>
@endsection