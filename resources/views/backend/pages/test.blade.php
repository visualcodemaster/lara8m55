

    <style type="text/css">
        body {
            font-family: "Merchant Copy";
        }

        div.invoice {
            border:3px solid black;
            /*padding:10px;*/
            /*margin-left:175px;*/
            /*margin-top:10px;*/
            /*height:370pt;*/
            width:100%;
        }

        div.company-name {
            text-align:center;
            padding-top:10px;
            padding-bottom:0px;
            color:#446294;
        }
        table {
            width:100%;
        }
        th,td {
            font-size: 12px;
        }
        .text-left {
            text-align:left;
        }
        .text-center {
            text-align:center;
        }
        .text-right {
            text-align:right;
        }
        .f12 {  font-size: 12px  }
        .f13 {  font-size: 13px  }
        .f14 {  font-size: 14px  }
        .f15 {  font-size: 15px  }
    </style>
<body>
<div class="invoice">
    <div class="company-name">
        <h1>Ali Traders</h1>
    </div>
    <p class="text-center f13">Street#5, Ghousia Bazaar Fatehpur </p>
    <p class="text-center f13">03---------</p>
    <table class="invoice-overview" border="0" style="margin-top:30px; text-align: center">
        <tr>
            <th class="f12">Invoice ID</th>
            <td class="f12">217</td>
            <th class="f12">Customer</th>
        </tr>
        <tr>
            <th class="f12">Date</th>
            <td class="f12">22-04-1993</td>
            <td class="f12">Ali Khan</td>
        </tr>
    </table>
    <div class="clear-fix"></div>
    <table class="invoice-detail" border='1' cellspacing='0' style="margin-top: 30px">
        <tr style="text-indent:7px;background-color:#446294;color:white;">
            <th width="70%">Name</th>
            <th width="10%">Qty</th>
            <th width="20%">Rate</th>
            <th width="20%">Total</th>
        </tr>
        <tr style="text-indent:7px;">
            <td width="70%">Test product Very Long</td>
            <td width="5%">10</td>
            <td width="10%">10</td>
            <td width="15%">100</td>
        </tr>
    </table>

    <table border="0" cellspacing='2' style="margin-top:30px; text-align: left">
        <tr>
            <th>Items</th>
            <td>10</td>
            <th>Previous</th>
            <td>0</td>
        </tr>
        <tr>
            <th>Amount</th>
            <td>100</td>
            <th>Receivable</th>
            <td>100</td>
        </tr>
        <tr>
            <th>Discount</th>
            <td>0</td>
            <th>Received</th>
            <td>100</td>
        </tr>
        <tr>
            <th>Total Amount</th>
            <td>100</td>
            <th>Balance</th>
            <td>0</td>
        </tr>
    </table>
    <footer  style="margin-top:80px;background-color:red;">

        <h2 style="text-align:center" class="footer">Exprsol.com</h2>

    </footer>

</div>

</body>
