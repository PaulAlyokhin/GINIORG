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
                <div class="search-feild" style="padding:40px">
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
$ajax_url = url('/admin/certificates/get/');
$produce_url = url('/admin/certificates/produce/');
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
            }, {
                field: "Actions",
                title: "Actions",
                sortable: !1,
                overflow: "visible",
                template: function (e, t, a) {
                    return '<a href="{{ $produce_url }}/'+e.id+'" class="btn m-btn--pill m-btn--air         btn-primary">Produce</a>'
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