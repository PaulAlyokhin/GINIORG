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
               <i class="la la-file-text-o"></i> {{ $title }}
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
                                {{ $title }}
                            </h3>
                        </div>
                    </div>
                </div>
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
                                        <h5 class="modal-title" id="exampleModalLabel">Create new IDU application</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ url('admin/certificates/create_idu_application') }}" method="POST">
                                    <div class="modal-body">
                                        @csrf
                                        <div class="form-group d-flex">
                                            <label for="">Name:</label>
                                            <input type="text" name="username" class="form-control">
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
                                            <label for="">Activity:</label>
                                            <select name="activity_type" id="activity_type" class="form-control">
                                                @foreach($activities as $activity)
                                                <option value="{{ $activity->id }}">{{ $activity->activity_name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group d-flex">
                                            <label for="">Activity Title:</label>
                                            <input type="text" name="activity_title" class="form-control">
                                        </div> 
                                        <div class="form-group d-flex">
                                            <label for="">Activity Description:</label>
                                            <textarea name="activity_description" class="form-control" rows="10"></textarea>
                                        </div> 
                                        <div class="form-group d-flex">
                                            <label for="">Start Date:</label>
                                            <input type="text" name="start_date" class="form-control" placeholder="Start Date" id="m_datepicker_4_3">
                                        </div> 
                                        <div class="form-group d-flex">
                                            <label for="">End Date:</label>
                                            <input type="text" name="end_date" class="form-control" placeholder="End Date" id="m_datepicker_4_4">
                                        </div> 
                                        <div class="form-group d-flex">
                                            <label for="">Acitivity Document:</label>
                                            <input type="text" name="document" class="form-control">
                                        </div> 
                                        <div class="form-group d-flex">
                                            <label for="">IDUs Claimed:</label>
                                            <input type="text" name="IDUs_claimed" class="form-control">
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
<div class="modal fade" id="viewform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View IDU application</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('admin/certificates/create_idu_application') }}" method="POST">
            <div class="modal-body">
                @csrf
                <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Name:</label>
                    <span id="username"></span>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Certificate:</label>
                    <span id="view_certificate_type"></span>
                </div> 
                <div class="form-group col-md-6">
                    <label for="">Activity:</label>
                    <span id="view_activity_type"></span>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Activity Title:</label>
                    <span id="activity_title"></span>
                </div> 
                <div class="form-group col-md-6">
                    <label for="">Activity Description:</label>
                    <span id="activity_description"></span>
                </div> 
                <div class="form-group col-md-6">
                    <label for="">Start Date:</label>
                    <span id="start_date"></span>
                </div> 
                <div class="form-group col-md-6">
                    <label for="">End Date:</label>
                    <span id="end_date"></span>
                </div> 
                <div class="form-group col-md-6">
                    <label for="">Acitivity Document:</label>
                    <span id="document"></span>
                </div> 
                <div class="form-group col-md-6">
                    <label for="">IDUs Claimed:</label>
                    <span id="IDUs_claimed"></span>
                </div> 
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php
$ajax_url = url('/admin/applications/get/');
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
                        url: "{{ url('admin/certificates/getAllApplications') }}"
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
                field: "name",
                title: "Username",
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
                field: "activity_type",
                title: "Activity",
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
                            title: "Pending",
                            class: "m-badge--brand"
                        },
                        2: {
                            title: "Approved",
                            class: " m-badge--primary"
                        },
                    };
                    return '<span class="m-badge ' + t[e.status].class + ' m-badge--wide">' + t[e.status].title + "</span>"
                }
            }, {
                field: "Actions",
                title: "Actions",
                sortable: !1,
                overflow: "visible",
                template: function (e, t, a) {
                    return '<a href="javascript:view_app('+e.id+')" class="btn m-btn--pill m-btn--air         btn-primary">View</a>'
                }
            }]
        })
    }
};jQuery(document).ready(function () {
    certificate_list.init()
    $("#m_datepicker_4_3").datepicker({orientation:"bottom left",todayHighlight:!0,});
    $("#m_datepicker_4_4").datepicker({orientation:"bottom left",todayHighlight:!0,});
});
function view_app(id){
    $.ajax({
        type: "POST",
        url: '{{ $ajax_url }}',
        data: { 'id': id, },
        success: function (data) {
            $('#username').text(data['name']);
            $('#view_certificate_type').text(data['certificate_type']);
            $('#view_activity_type').text(data['activity_type']);
            $('#activity_title').text(data['title']);
            $('#activity_description').text(data['description']);
            $('#start_date').text(data['start_date']);
            $('#end_date').text(data['end_date']);
            $('#document').text(data['document']);
            $('#IDUs_claimed').text(data['IDUs_claimed']);
            $('#viewform').modal();
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