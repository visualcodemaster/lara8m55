<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{asset('theme/backend/assets/demo/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme/backend/assets/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
<h1 class="page-title"> Customer
    <small>Customers Detail & Modification</small>
</h1>
<div class="row">
    <div class="col-md-12">
        <div class="tabbable-line boxless tabbable-reversed">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tab_0" data-toggle="tab">Customer</a>
                </li>
                <li>
                    <a href="#tab_1" data-toggle="tab"> Customers Details</a>
                </li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_0">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Customers List </div>
                        </div>
                        <div class="portlet-body">
                            <h4>List of all the customers</h4>
                            <div class="row">
                                <div class="col-md-12" >
                                    <table id="customerslist" class="table table-striped- table-bordered table-hover table-checkable">
                                        <thead>

                                        <tr>
                                            <th>Record ID</th>
                                            <th>Order ID</th>
                                            <th>Country</th>
                                            <th>Ship City</th>
                                            <th>Ship Address</th>
                                            <th>Company Agent</th>
                                            <th>Company Name</th>
                                            <th>Ship Date</th>
                                            <th>Status</th>
                                            <th>Type</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($customers as $customer)
                                            <tr>
                                                <td>{{$customer->customer_name}}</td>
                                                <td>{{$customer->customer_name}}</td>
                                                <td>{{$customer->customer_name}}</td>
                                                <td>{{$customer->customer_name}}</td>
                                                <td>{{$customer->customer_name}}</td>
                                                <td>{{$customer->customer_name}}</td>
                                                <td>{{$customer->customer_name}}</td>
                                                <td>{{$customer->customer_name}}</td>
                                                <td>{{$customer->customer_name}}</td>
                                                <td>{{$customer->customer_name}}</td>
                                                <td nowrap></td>
                                            </tr>

                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab_1">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-male"></i>Customer </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->

                            <form class="form-horizontal">
                                <div class="form-body">
                                    <h3 class="form-section">Customer Details</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Search</label>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <select tabindex="1" id="customerSelect" style="width: 100%;" >
                                                            @foreach($customers as $customer)
                                                                <option value="{{ $customer->customer_id }}" >{{ $customer->customer_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <span class="help-block"> Search Customer To Edit </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="control-label col-md-3">Name</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="customer_name" class="form-control" placeholder="Ali Khan">
                                                    <span class="help-block"> Name of  the Customer</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Gender</label>
                                                <div class="col-md-9">
                                                    <select id="customer_gender" class="form-control">
                                                        <option value="" >Select Gender </option>
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                        <option value="3">Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Date of Birth</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="customer_dob" placeholder="dd/mm/yyyy"> </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Phone</label>
                                                <div class="col-md-9">
                                                    <input type="tel" id="customer_phone" class="form-control"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Mobile</label>
                                                <div class="col-md-9">
                                                    <input type="tel" id="customer_mobile" class="form-control"> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Address 1</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="customer_address1" class="form-control"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Address 2</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="customer_address2" class="form-control"> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">City</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="customer_city" class="form-control"> </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">State</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="customer_state" class="form-control"> </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Post Code</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="customer_postcode" class="form-control"> </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Country</label>
                                                <div class="col-md-9">
                                                    <select id="customer_country" class="form-control">
                                                        <option value="">Select Country</option>
                                                        <option value="1">Pakistan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <h3 class="form-section">Business Information</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Reference</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="customer_reference" class="form-control"> </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Previous</label>
                                                <div class="col-md-9">
                                                    <input type="number" id="customer_previous" class="form-control" placeholder="Previous Balance">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                </div>
                                <span id="js-hidden-ajax-search-customer-url" hidden>{{route('show.customer')}}</span>
                                <span id="js-hidden-ajax-add-customer-url" hidden>{{route('add.new.customer')}}</span>
                                <span id="js-hidden-ajax-update-customer-url" hidden>{{route('edit.customer')}}</span>

                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-9">
                                            <button id="add_customer" class="btn green">Add</button>
                                            <button id="update_customer" type="button" class="btn btn-info">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('theme/backend/vendors/jquery/dist/jquery.js')}}" type="text/javascript"></script>

<script src="{{asset('theme/backend/assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts -->
{{--    <script src="{{asset('theme/backend/assets/demo/custom/crud/datatables/basic/basic.js')}}" type="text/javascript"></script>--}}

<script>

  $(document).ready(function () {


    $(function() {
      $('#dob').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'),10)
      }, function(start, end, label) {
        var years = moment().diff(start, 'years');
        //alert("You are " + years + " years old!");
      });
    });

    var table = $('#customerslist');

    // begin first table
    table.DataTable({
      responsive: true,

      //== DOM Layout settings
      dom: `<'row'<'col-sm-12'tr>>
			<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,

      lengthMenu: [5, 10, 25, 50],

      pageLength: 10,

      language: {
        'lengthMenu': 'Display _MENU_',
      },

      //== Order settings
      order: [[1, 'desc']],

      headerCallback: function(thead, data, start, end, display) {
        thead.getElementsByTagName('th')[0].innerHTML = `
                    <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                        <input type="checkbox" value="" class="m-group-checkable">
                        <span></span>
                    </label>`;
      },
      columns: [

        {data: ''},
        {data: 'Name'},
        {data: 'Phone'},
        {data: 'Mobile'},
        {data: 'Address'},
        {data: 'City'},
        {data: 'Country'},
        {data: 'Previous'},
        {data: 'Status'},
        {data: 'Type'},
        {data: 'Actions'},
      ],
      columnDefs: [
        {
          targets: 0,
          width: '30px',
          className: 'dt-right',
          orderable: false,
          render: function(data, type, full, meta) {
            return `
                        <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                            <input type="checkbox" value="" class="m-checkable">
                            <span></span>
                        </label>`;
          },
        },
        {
          targets: -1,
          title: 'Actions',
          orderable: false,
          render: function(data, type, full, meta) {
            return `
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                          <i class="la la-edit"></i>
                        </a>`;
          },
        },
        {
          targets: 8,
          render: function(data, type, full, meta) {
            var status = {
              1: {'title': 'Pending', 'class': 'm-badge--brand'},
              2: {'title': 'Delivered', 'class': ' m-badge--metal'},
              3: {'title': 'Canceled', 'class': ' m-badge--primary'},
              4: {'title': 'Success', 'class': ' m-badge--success'},
              5: {'title': 'Info', 'class': ' m-badge--info'},
              6: {'title': 'Danger', 'class': ' m-badge--danger'},
              7: {'title': 'Warning', 'class': ' m-badge--warning'},
            };
            if (typeof status[data] === 'undefined') {
              return data;
            }
            return '<span class="m-badge ' + status[data].class + ' m-badge--wide">' + status[data].title + '</span>';
          },
        },
        {
          targets: 9,
          render: function(data, type, full, meta) {
            var status = {
              1: {'title': 'Online', 'state': 'danger'},
              2: {'title': 'Retail', 'state': 'primary'},
              3: {'title': 'Direct', 'state': 'accent'},
            };
            if (typeof status[data] === 'undefined') {
              return data;
            }
            return '<span class="m-badge m-badge--' + status[data].state + ' m-badge--dot"></span>&nbsp;' +
              '<span class="m--font-bold m--font-' + status[data].state + '">' + status[data].title + '</span>';
          },
        },
      ],
    });
    //$('#customerslist').DataTable();

//            $(".tableInfo").removeAttr("style");



    $('#add_customer').on('click', function (e) {
      e.preventDefault();
      var add_customer_url = $('#js-hidden-ajax-add-customer-url').text();
      $.ajax({
        type:'post',
        url:add_customer_url,
        data:{

          '_token' : $('meta[name="csrf-token"]').attr('content'),
          'customer_name': $('#customer_name').val(),
          'customer_gender': $('#customer_gender').val(),
          'customer_phone': $('#customer_phone').val(),
          'customer_mobile': $('#customer_mobile').val(),
          'customer_dob': $('#customer_dob').val(),
          'customer_address_1': $('#customer_address1').val(),
          'customer_address_2': $('#customer_address2').val(),
          'customer_city': $('#customer_city').val(),
          'customer_state': $('#customer_state').val(),
          'customer_postcode': $('#customer_postcode').val(),
          'customer_country': $('#customer_country').val(),
          'customer_reference': $('#customer_reference').val(),
          'customer_previous': $('#customer_previous').val(),

        },
        success:function (response) {
          if(response.success)
          {
            //Do something Awesome
          }
        }
      });

    });
    $('#update_customer').on('click', function (e) {
      var update_customer_url = $('#js-hidden-ajax-update-customer-url').text();
      $.ajax({
        type:'post',
        url:update_customer_url,
        data:{
          '_token' : $('meta[name="csrf-token"]').attr('content'),
          'customer_id': $('#customerSelect').val(),
          'customer_name': $('#customer_name').val(),
          'customer_gender': $('#customer_gender').val(),
          'customer_phone': $('#customer_phone').val(),
          'customer_mobile': $('#customer_mobile').val(),
          'customer_dob': $('#customer_dob').val(),
          'customer_address_1': $('#customer_address1').val(),
          'customer_address_2': $('#customer_address2').val(),
          'customer_city': $('#customer_city').val(),
          'customer_state': $('#customer_state').val(),
          'customer_postcode': $('#customer_postcode').val(),
          'customer_country': $('#customer_country').val(),
          'customer_reference': $('#customer_reference').val(),
          'customer_previous': $('#customer_previous').val(),

        },
        success:function (response) {
          if(response.success)
          {
            //Do something Awesome
          }
        }
      });
    });
    $('#customerSelect').on('select2:select', function (e) {
      var search_customer_url = $('#js-hidden-ajax-search-customer-url').text();
      var customer_id = $('#customerSelect').val();
      $.ajax({
        type:'get',
        url:search_customer_url,
        data:{
//                        '_token' : $('meta[name="csrf-token"]').attr('content'),
          'customer_id': customer_id,
        },
        success:function (response) {
          //console.log(response.customer);
          var customer = response.customer;
          console.log(customer.customer_name);

          if(response.success)
          {
            $('#customer_name').val(customer.customer_name);
            $('#customer_phone').val(customer.customer_phone);
            $('#customer_mobile').val(customer.customer_mobile);
            $('#customer_gender').val(customer.customer_gender);
            $('#customer_dob').val(customer.customer_dob);
            $('#customer_address1').val(customer.customer_address_1);
            $('#customer_address2').val(customer.customer_address_2);
            $('#customer_city').val(customer.customer_city);
            $('#customer_state').val(customer.customer_state);
            $('#customer_postcode').val(customer.customer_postcode);
            $('#customer_country').val(customer.customer_country);
            $('#customer_reference').val(customer.customer_reference);
            $('#customer_previous').val(customer.customer_previous)
          }
        }
      });
      var qty=$(this).find(':selected').data("qty");
      var price=$(this).find(':selected').data("price");
      $('body').find("#availableQuantityValue").text(qty);
      $('body').find("#priceField").val(price);
    });
  });
  $('#customerSelect').select2();

</script>

</body>
</html>


