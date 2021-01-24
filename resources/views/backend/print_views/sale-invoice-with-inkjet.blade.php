<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SkyPos</title>
    <style>
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        a {
            color: #5D6975;
            text-decoration: underline;
        }

        body {
            position: relative;
            width: 17cm;
            margin: 0 auto;
            color: #001028;
            background: #FFFFFF;
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        header {
            padding: 10px 0;
            margin-bottom: 30px;
        }

        #logo {
            text-align: center;
            margin-bottom: 10px;
        }

        #logo img {
            width: 90px;
        }

        h1 {
            border-bottom: 1px solid  #5D6975;
            color: #5D6975;
            font-size: 2.4em;
            line-height: 1.4em;
            font-weight: normal;
            text-align: center;
            margin: 0 0 20px 0;
        }

        #project {
            float: right;
            text-align: left;
            margin-right: 15px;
        }

        #project span {
            color: #5D6975;
            text-align: left;
            margin-right: 15px;
        }

        #company {
            float: left;
            text-align: left;
            margin-left: 20px !important;
            display: inline-block;
        }

        .company-detail {
            font-size: 2.4em;
        }

        #project div,
        #company div {
            white-space: nowrap;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
        }

        /*table tr:nth-child(2n-1) td {*/
        /*    background: #F5F5F5;*/
        /*}*/

        table th,
        table td {
            text-align: center;
            font-size: 1.3em;
        }

        table th {
            padding: 5px 20px;
            color: #5D6975;
            border-bottom: 1px solid #C1CED9;
            white-space: nowrap;
            font-weight: normal;
        }

        table td {
            padding: 5px;
        }

        table td.service {
            vertical-align: top;
        }

        table td.service,
        table td.unit,
        table td.qty,
        table td.total {
            font-size: 2.2em;
            text-align: left;
        }

        table th.service,
        table th.unit,
        table th.qty,
        table th.total {
            padding: 5px;
            font-size: 1.8em;
            text-align: left;
        }
        img {
            -webkit-print-color-adjust: exact !important;
        }
        .f18 {
            font-size: 1.8em;
        }
        .f20 {
            font-size: 2.0em;
        }
        .f22 {
            font-size: 2.2em;
        }
        .f24 {
            font-size: 2.4em;
        }

    </style>
</head>
<body>
<header class="clearfix">
    <h1 style="font-size: 60px">SkyPos</h1>

    <div id="company" class="clearfix">
        <h3>Invoice From</h3>
        <div class="company-detail" style="font-weight: bold">SkyPos</div>
        <div class="company-detail">Main Bazar, Fatehpur</div>
        <div class="company-detail">0300-0000000</div>
    </div>
    <div id="project" style="margin-right: 200px">
        <h3>Invoice To</h3>
        <div class="company-detail"><span>Customer</span>{{$customer}}</div>
        <div class="company-detail"><span>DATE</span>{{date('d-m-Y')}}</div>
        <div class="company-detail"><span>Invoice #</span> {{$invoice_id}}</div>
    </div>
</header>
<main>
    <table style="border: 1px solid">
        <thead>
        <tr>
            <th class="service">Product</th>
            <th class="qty">QTY</th>
            <th class="unit">PRICE</th>
            <th class="total">TOTAL</th>
        </tr>
        </thead>
        <tbody>
        @foreach($sale_detail['sale_cart_data'] as $cart)
            <tr style="border: 1px solid">
                <td width="50%" style="word-break: keep-all;" class="service">{{$cart['product_name']}}</td>
                <td width="15%" class="qty">{{$cart['product_qty']}}</td>
                <td width="15%" class="unit">{{$cart['product_price']}}</td>
                <td width="20%" class="total">{{$cart['product_total_price']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <hr>
    <table style="text-align: center">
        <tr>
            <th width="15%" class="f20">Items</th>
            <td width="35%" class="f20">{{$sale_detail['items']}}</td>
            <th width="25%" class="f20">Previous</th>
            <td width="25%" class="f20">{{$sale_detail['previous']}}</td>
        </tr>
        <tr>
            <th width="15%" class="f20">Amount</th>
            <td width="35%" class="f20">{{$sale_detail['amount']}}</td>
            <th width="25%" class="f20">Receivable</th>
            <td width="25%" class="f20">{{$sale_detail['total_amount']}}</td>
        </tr>
        <tr>
            <th width="15%" class="f20">Discount</th>
            <td width="35%" class="f20">{{$sale_detail['discount']}}</td>
            <th width="25%" class="f20">Received</th>
            <td width="25%" class="f20">{{$sale_detail['received']}}</td>
        </tr>
        <tr>
            <th width="15%" class="f20">Net</th>
            <td width="35%" class="f20">{{$sale_detail['net_amount']}}</td>
            <th width="25%" class="f20">Balance</th>
            <td width="25%" class="f20">{{$sale_detail['balance']}}</td>
        </tr>
    </table>
    <hr>
    <footer>
        <h3 style="text-align:center" class="footer"><a href="https://exprsol.com">exprsol.com</a></h3>
    </footer>

</main>
</body>
</html>
