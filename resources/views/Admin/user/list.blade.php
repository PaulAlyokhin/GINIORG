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
                                All Users
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <a href="#new_user" class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air" data-toggle="modal">
                                    <span>
                                        <i class="la la-plus"></i>
                                        <span>New User</span>
                                    </span>
                                </a>
                                <style type="text/css">
                                    form .form-group.d-flex {
                                        align-items: center;
                                    }
                                </style>
                                <div class="modal fade" id="new_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">New User Creation</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ url('admin/users/postNew') }}" method="POST" id="editform">
                                            <div class="modal-body">
                                                @csrf
                                                <input type="hidden" name="user_id" id="user_id"/>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="user-form-left-content">
                                                            <h5 class="heading">Personal Data</h5>
                                                            <div class="form-group d-flex">
                                                                <label for="">Title:</label>
                                                                <input type="text" name="title" id="title" placeholder="Mr." class="form-control">
                                                            </div>
                                                            <div class="form-group d-flex">
                                                                <label for="">First Name:</label>
                                                                <input type="text" name="first_name" id="first_name" class="form-control">
                                                            </div>
                                                            <div class="form-group d-flex">
                                                                <label for="">Middle Name:</label>
                                                                <input type="text" name="middle_name" id="middle_name" class="form-control">
                                                            </div>
                                                            <div class="form-group d-flex">
                                                                <label for="">Last Name:</label>
                                                                <input type="text" name="last_name" id="last_name" class="form-control">
                                                            </div> 
                                                            <div class="form-group d-flex">
                                                                <label for="">Email Adress:</label>
                                                                <input type="email" name="email" id="email" class="form-control">
                                                            </div>
                                                            <div class="form-group d-flex">
                                                                <label for="">Date Of Birth:</label>
                                                                <select name="birth_day" id="birth_day" class="form-control">
                                                                    @for($i=1;$i<=31;$i++)
                                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                                    @endfor
                                                                </select>
                                                                <select name="birth_mon" id="birth_mon" class="form-control">
                                                                    @for($i=1;$i<=12;$i++)
                                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                                    @endfor
                                                                </select>
                                                                <select name="birth_year" id="birth_year" class="form-control">
                                                                    @for($i=2019;$i>=1919;$i--)
                                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                                    @endfor
                                                                </select>
                                                            </div>
                                                            <div class="form-group d-flex">
                                                                <label for="">Status:</label>
                                                                <span class="status">Panding</span>
                                                            </div> 
                                                            <div class="form-group d-flex">
                                                                <label for="">User Type:</label>
                                                                <span class="user-type">Professional</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="user-form-right-content">
                                                            <h5 class="heading">Name as should appear on certificates</h5>
                                                            <div class="form-group d-flex">
                                                                <label for="">Name On Certificates:</label>
                                                                <input type="text" id="cert_name" name = "cert_name" class="form-control">
                                                            </div>
                                                            <div class="form-group d-flex">
                                                                <label for="">Address Line 1:</label>
                                                                <input type="text" id="address_1" name = "address_1"  class="form-control">
                                                            </div>
                                                            <div class="form-group d-flex">
                                                                <label for="">Address Line 2:</label>
                                                                <input type="text" id="address_2" name = "address_2"  class="form-control">
                                                            </div>
                                                            <div class="form-group d-flex">
                                                                <label for="">Mobile Number:</label>
                                                                <input type="text" id="mobile" name = "mobile"  class="form-control">
                                                            </div>
                                                            <div class="form-group d-flex">
                                                                <label for="">Phone Number:</label>
                                                                <input type="text" id="phone1" name = "phone1"  class="form-control">
                                                            </div>
                                                            <div class="form-group d-flex">
                                                                <label for="">Country:</label>
                                                                <select name="country_code" id="country_code" class="form-control">
                                                                    @foreach($countries as $country)
                                                                    <option value="{{ $country->code }}">{{ $country->asciiname }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group d-flex">
                                                                <label for="">Phone Number:</label>
                                                                <input type="text" id="phone2" name = "phone2"   class="form-control">
                                                            </div>
                                                            <div class="form-group d-flex">
                                                                <label for="">Zipcode:</label>
                                                                <input type="text" id="zipcode" name = "zipcode"   class="form-control">
                                                            </div>
                                                            <div class="form-group d-flex">
                                                                <label for="">Postal Code:</label>
                                                                <input type="text" id="postalcode" name = "postalcode"   class="form-control">
                                                            </div>
                                                            <div class="form-group d-flex">
                                                                <label for="">Assign Handbook Id:</label>
                                                                <select name="handbook_id" id="handbook_id" class="form-control">
                                                                    <option value="">Select Handbook Id</option>
                                                                    <option value="">Select Handbook Id</option>
                                                                    <option value="">Select Handbook Id</option>
                                                                    <option value="">Select Handbook Id</option>
                                                                </select>
                                                            </div>
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
                                <th>Name</th>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>User Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ sprintf("%06d", $user->id) }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->status }}</td>
                                <td>{{ $user->role }}</td>
                                <td nowrap>{{ $user->id }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="modal fade" id="view_certificates" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewcertificate_header">Personal Certificate</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="m-portlet m-portlet--mobile dt-container" style="margin-top:0px">
                    <div class="m-portlet__body">

                        <!--begin: Datatable -->
                        <div class="m_datatable" id="personal_certificates_table"></div>

                        <!--end: Datatable -->
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
<?php
    $editurl = url('admin/users/edit/');
    $statusurl = url('admin/users/updatestatus/');
    $deleteurl = url('admin/users/delete/');
    $getinfourl = url('admin/users/getinfo/');
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
                        return'<a href="javascript:view_certificates('+e+')" class="btn m-btn--pill m-btn--air         btn-primary">View Certificates</a>\n                  <a href="javascript:view_education('+e+')" class="btn m-btn--pill m-btn--air         btn-primary">View Education</a>\n                     <a href="javascript:view_work('+e+')" class="btn m-btn--pill m-btn--air         btn-primary">View Work</button>\n                         <span class="dropdown">\n                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">\n                              <i class="la la-ellipsis-h"></i>\n                            </a>\n                            <div class="dropdown-menu dropdown-menu-right">\n                                <a class="dropdown-item" href="javascript:edituser('+e+')"><i class="la la-edit"></i> Edit Details</a>\n                                <a class="dropdown-item" href="{{ $statusurl }}/'+e+'"><i class="la la-leaf"></i> Update Status</a>\n                                <a class="dropdown-item" href="{{ $deleteurl }}/'+e+'"><i class="la la-trash"></i> Delete User</a>\n                            </div>\n                        </span>\n                        <a href="javascript:edituser('+e+')" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Edit">\n                          <i class="la la-edit"></i>\n                        </a>'
                    }
                },
                {
                    targets:4,
                    render:function(e,a,t,n){
                        var s={
                            @foreach($status as $each)
                            {{ $each->id }}:{title:"{{ $each->status_name }}",class:"{{ $each->class }}"},
                            @endforeach
                        };
                        return void 0===s[e]?e:'<span class="m-badge '+s[e].class+' m-badge--wide">'+s[e].title+"</span>"
                    }
                },
                {
                    targets:5,
                    render:function(e,a,t,n){
                        var s={
                            @foreach($roles as $role)
                            {{ $role->id }}:{title:"{{ $role->role_name }}",state:"{{ $role->state }}"},
                            @endforeach
                        };
                        return void 0===s[e]?e:'<span class="m-badge m-badge--'+s[e].state+' m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-'+s[e].state+'">'+s[e].title+"</span>"
                    }
                }]
        })
    }
};jQuery(document).ready(function(){DatatablesBasicHeaders.init()});
function edituser(id){
    $.ajax({
        type: "POST",
        url: '{{ $getinfourl }}',
        data: { 'id': id, },
        success: function (data) {
            $('#title').val(data['title']);
            $('#first_name').val(data['first_name']);
            $('#middle_name').val(data['middle_name']);
            $('#last_name').val(data['last_name']);
            $('#birth_day').val(data['birth_day']);
            $('#birth_mon').val(data['birth_mon']);
            $('#email').val(data['email']);
            $('#birth_year').val(data['birth_year']);
            $('#cert_name').val(data['cert_name']);
            $('#address_1').val(data['address_1']);
            $('#address_2').val(data['address_2']);
            $('#mobile').val(data['mobile']);
            $('#phone1').val(data['phone1']);
            $('#country_code').val(data['country_code']);
            $('#phone2').val(data['phone2']);
            $('#zipcode').val(data['zipcode']);
            $('#postalcode').val(data['postalcode']);
            $('#editform').attr('action', '{{ $editurl }}');
            $('#user_id').val(id);
            $('#exampleModalLabel').text('Edit User');
            $('#new_user').modal();
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
function view_certificates(id){
    $("#personal_certificates_table").length && $(".m_datatable").mDatatable({
        data: {
            type: "remote",
            source: {
                read: {
                    url: "{{ url('admin/certificates/getPersonalAssigns') }}/"+id,
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
        }]
    })
    $('#viewcertificate_header').text('View Certificates');
    $('#view_certificates').modal();
}
function view_education(id){
    $.ajax({
        type: "POST",
        url: '{{ $getinfourl }}',
        data: { 'id': id, },
        success: function (data) {
        },
        error: function (data, textStatus, errorThrown) {
            alert('error');
        },
    });
}
function view_work(id){
    $.ajax({
        type: "POST",
        url: '{{ $getinfourl }}',
        data: { 'id': id, },
        success: function (data) {
        },
        error: function (data, textStatus, errorThrown) {
            alert('error');
        },
    });
}
</script>
@endsection