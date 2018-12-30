@extends('Admin.layouts.master')
@section('content')
<!-- BEGIN: Subheader -->
<div class="sub-header">
    <div class="m-container">
        <div>
            <h3 class="m-subheader__title text-center">
                <img src="{{ url('admin_assets/assets/app/media/img/certificates.png') }}" alt="">
                CREATE / MANAGE CERTIFICATES
            </h3>
        </div>
    </div>
</div>

<!-- END: Subheader -->

<!-- end::Header -->
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
                                All Certificates
                            </h3>
                        </div>
                    </div>
                </div>
                <style type="text/css">
                    form .form-group.d-flex {
                        align-items: center;
                    }
                </style>
                <div class="search-feild">
                    <div class="btn-area">
                        <a href="#newform" class="btn-add-new" data-toggle="modal">
                            <i class="fas fa-plus"></i>
                            Add New
                        </a>
                        <div class="modal fade" id="newform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add New Certificates</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ url('admin/certificates/postNew') }}" method="POST">
                                    <div class="modal-body">
                                        @csrf
                                        <div class="form-group d-flex">
                                            <label for="" class="col-sm-4">Certificates Name:</label>
                                            <input type="text" placeholder="Mr." name="certificate_name" class="form-control col-sm-8">
                                        </div>
                                        <div class="form-group d-flex">
                                            <label for="" class="col-sm-4">Acronym:</label>
                                            <input type="text" name="acronym" class="form-control col-sm-8">
                                        </div>
                                        <div class="form-group d-flex">
                                            <label for="" class="col-sm-4">Code:</label>
                                            <input type="text" name="code" class="form-control col-sm-8">
                                        </div>
                                        <div class="form-group d-flex">
                                            <label for="" class="col-sm-4">Validity / Cycle:</label>
                                            <input type="text" name="validity" class="form-control col-sm-8">
                                        </div> 
                                        <div class="form-group d-flex">
                                            <label for="" class="col-sm-4">IDU</label>
                                            <div class="checkbox col-sm-8"><input type="checkbox" name="IDU" value="1">
                                            </div>
                                        </div>
                                        <div class="form-group d-flex">
                                            <label for="" class="col-sm-4">IDU Number:</label>
                                            <input type="text" name="IDU_num" class="form-control col-sm-8">
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
<div class="modal fade" id="editform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Certificates</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST" id="edit_form">
            <div class="modal-body">
                @csrf
                <input type="hidden" name="cert_id" id="cert_id"/>
                <div class="form-group d-flex">
                    <label for="" class="col-sm-4">Certificates Name:</label>
                    <input type="text" placeholder="Mr." name="certificate_name" id="edit_certificate_name" class="form-control col-sm-8">
                </div>
                <div class="form-group d-flex">
                    <label for="" class="col-sm-4">Acronym:</label>
                    <input type="text" name="acronym" id="edit_acronym" class="form-control col-sm-8">
                </div>
                <div class="form-group d-flex">
                    <label for="" class="col-sm-4">Code:</label>
                    <input type="text" name="code" id="edit_code" class="form-control col-sm-8">
                </div>
                <div class="form-group d-flex">
                    <label for="" class="col-sm-4">Validity / Cycle:</label>
                    <input type="text" name="validity" id="edit_validity" class="form-control col-sm-8">
                </div> 
                <div class="form-group d-flex">
                    <div class="checkbox col-sm-12">
                      <label class="col-sm-4"><input type="checkbox" name="IDU" name="edit_IDU" value="1">IDU</label>
                    </div>
                </div>
                <div class="form-group d-flex">
                    <label for="" class="col-sm-4">IDU Number:</label>
                    <input type="text" name="IDU_num" id="edit_IDU_num" class="form-control col-sm-8">
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
<?php
$edit_url = url('/admin/certificates/edit/');
$delete_url = url('/admin/certificates/delete/');
$ajax_url = url('/admin/certificates/get/');
?>
<!-- end::Body -->
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
var certificate_list={
    init:function(){
        $("#m_datatable_latest_orders").length && $(".m_datatable").mDatatable({
            data: {
                type: "remote",
                source: {
                    read: {
                        url: "{{ url('admin/certificates/getAll') }}"
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
                title: "#",
                sortable: !1,
                width: 40,
                selector: {
                    class: "m-checkbox--solid m-checkbox--brand"
                },
                textAlign: "center"
            }, {
                field: "certificate_name",
                title: "Certificate Name",
                width: 250,
                responsive: {
                    visible: "lg"
                }
            }, {
                field: "acronym",
                title: "Acronym",
                width: 80,
            }, {
                field: "code",
                title: "Code",
                width: 80,
                /*template: function (e) {
                    var t = {
                        1: {
                            title: "Pending",
                            class: "m-badge--brand"
                        },
                        2: {
                            title: "Delivered",
                            class: " m-badge--metal"
                        },
                        3: {
                            title: "Canceled",
                            class: " m-badge--primary"
                        },
                        4: {
                            title: "Success",
                            class: " m-badge--success"
                        },
                        5: {
                            title: "Info",
                            class: " m-badge--info"
                        },
                        6: {
                            title: "Danger",
                            class: " m-badge--danger"
                        },
                        7: {
                            title: "Warning",
                            class: " m-badge--warning"
                        }
                    };
                    return '<span class="m-badge ' + t[e.Status].class + ' m-badge--wide">' + t[e.Status].title + "</span>"
                }*/
            }, {
                field: "validity",
                title: "Validity/Cycle",
                width: 100,
                template: function (e) {
                    return e.validity+' years'
                }
            }, {
                field: "Actions",
                width:250,
                title: "Actions",
                sortable: !1,
                overflow: "visible",
                template: function (e, t, a) {
                    /*return '                        <div class="dropdown ' + (a.getPageSize() - t <= 4 ? "dropup" : "") + '">                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a href="javascript:editCert('+e.id+')" class="btn btn-success m-btn--wide"><i class="la la-edit"></i> Edit</a> <a href="{{ $delete_url }}/'+e.id+'" class="btn btn-danger" title="Delete">                            <i class="la la-trash"></i>  Delete                      </a>                    '*/
                    return '<a href="javascript:editCert('+e.id+')" class="btn btn-success m-btn--wide"><i class="la la-edit"></i> Edit</a> <a href="{{ $delete_url }}/'+e.id+'" class="btn btn-danger" title="Delete">                            <i class="la la-trash"></i>  Delete                      </a>                    '
                }
            }]
        })
    }
};jQuery(document).ready(function () {
    certificate_list.init()
});
function editCert(id){
    $.ajax({
        type: "POST",
        url: '{{ $ajax_url }}',
        data: { 'id': id, },
        success: function (data) {
            $('#edit_certificate_name').val(data['certificate_name']);
            $('#edit_acronym').val(data['acronym']);
            $('#edit_code').val(data['code']);
            $('#edit_validity').val(data['validity']);
            $('#edit_IDU_num').val(data['IDU_num']);
            $('#cert_id').val(id);
            $('#edit_form').attr('action', '{{ $edit_url }}');
            $('#editform').modal();
        },
        error: function (data, textStatus, errorThrown) {
            alert('error');
        },
    });
}
</script>
@endsection