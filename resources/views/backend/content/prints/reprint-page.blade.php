@extends('backend.layouts.master')
@section('page_level_styles')
@stop
@section('content')
    <h1 class="page-title"> Reprint
        <small>- Reprint Invoices & Others</small>
    </h1>
    <div class="row">
        <div class="col">
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Reprint
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="card">
                        <div class="card-body">

                            <form action="{{route('prints.reprint.sale.invoice')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Sale Invoice #</label>
                                            <div class="col">
                                                <input tabindex="1" id="sale_invoice_id" name="sale_invoice_id" style="width: 100%;" class="form-control @error('sale_invoice_id') is-invalid @enderror"/>
                                                @error('sale_invoice_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col text-right mr-4">
                                        <a href="javascript:void(0)" id="reprintSaleInvoice"  class="btn btn-success">Search Invoice</a>
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
@stop
@section('page_level_scripts')
    <script>
        $(document).ready(function() {
            $('body').on('click', '#reprintSaleInvoice', function (event) {
                showPreLoader();
                $.ajax({
                    type: 'get',
                    url: '{{route('prints.reprint.sale.invoice')}}',
                    data: {
                        'sale_invoice_id': $('#sale_invoice_id').val(),
                    },
                    success: function (response) {
                        if (response.success) {
                            setTimeout(function () {
                                hidePreLoader();
                            }, 2000)
                            var originalContents = document.body.innerHTML;
                            window.document.body.innerHTML = response.html;
                            window.print();
                            setTimeout(function () {
                                window.location.reload();
                            }, 100);
                        }
                    },
                    error: function (response) {

                    },
                });
            });
        });
    </script>
@stop
