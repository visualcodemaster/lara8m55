@extends('backend.layouts.master')
@section('page_level_styles')
    <link href="{{asset('theme/vendors/datatables/datatables.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
@stop
@section('content')
    <h1 class="page-title"> Receivables</h1>
    <div class="card">
        <div class="card-header">
            <h4>Receive Previous Balance or View</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class=" col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label for="customer_name" class=" control-label">Name</label>
                                    <select id="customer_name" style="width: 100%">
                                        <option></option>
                                        @foreach($customers as $customer)
                                            <option value="{{ $customer->id }}">{{ $customer->customer_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <span id="js-hidden-ajax-fetch-customer-credit-url" hidden>{{route('transactions.customer.credit')}}</span>
                                <span id="js-hidden-ajax-credit-received-url" hidden>{{route('transactions.receive.previous.store')}}</span>
                                <span id="js-hidden-ajax-credit-history-datatable-url" hidden>{{route('transactions.credit.history.datatable',$customers[0]->id)}}</span>
                                <div class="form-group">
                                    <label for="receivable" class="control-label">Amount</label>
                                    <input type="number" step="any" class=" form-control" value="0" name="amount" id="amount" disabled placeholder="Receivables"/>
                                </div>
                                <div class="form-group">
                                    <label for="discount" class="control-label">Discount</label>
                                    <input type="number" step="any" class=" form-control" name="discount" id="discount" placeholder="Discount"/>
                                </div>
                                <div class="form-group">
                                    <label for="net_amount" class=" control-label">Net Total</label>
                                    <input type="number" step="any" class=" form-control" name="net_amount" id="net_amount" disabled placeholder="Net Total"/>

                                </div>
                                <div class="form-group">
                                    <label for="received" class="control-label">Received</label>
                                    <input type="number" step="any" class=" form-control" name="received" id="received" placeholder="Received"/>
                                </div>
                                <div class="form-group">
                                    <label for="balance" class=" control-label">Balance</label>
                                    <input type="number" step="any" class=" form-control" name="balance" id="balance" disabled placeholder="Balance"/>
                                </div>
                                <div class="form-group text-right">
                                    <div class="col-md-offset-8 col-md-10">
                                        <button type="button" id="payment_received" class="btn green">Receive</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="creditHistory" class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Items</th>
                                        <th>Receivable</th>
                                        <th>Discount</th>
                                        <th>Net</th>
                                        <th>Previous</th>
                                        <th>Total</th>
                                        <th>Received</th>
                                        <th>Balance</th>
                                        <th>Bill ID</th>
                                    </tr>
                                    </thead>
{{--                                    <tbody>--}}
{{--                                    </tbody>--}}
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('page_level_scripts')
    <script src="{{asset('theme/vendors/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('js/pos/transactions.js')}}"></script>
    <script type="text/javascript">
        window.basePath = "{{URL::to('/')}}";
    </script>
@endsection
