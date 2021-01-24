<html>

    <head>
    <title>Simple invoice in Html</title>
        <style type="text/css">
        body {
            font-family: Verdana;
        }

        div.invoice {
        border:3px solid black;
        padding:10px;
		margin-left:250px;
		margin-top:50px;
        height:370pt;
        width:570pt;
        }

        div.company-name {

            text-align:center;
			padding-top:10px;
			padding-bottom:0px;
        }

        div.invoice-details {
            float:left;
			padding-bottom:0px;
        }

        div.clear-fix {
            clear:both;
            float:none;
        }

        table {
            width:100%;
        }

        th {
            text-align: left;
        }

        td {
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

@media (max-width: 600px){

			   body {
            font-family: Verdana;
        }

        div.invoice {
        border:3px solid black;
        padding:10px;
		margin-left:10px;
		margin-top:50px;
        height:370pt;
        width:300pt;

        }

        div.company-name {

            text-align:center;
			padding-top:10px;
			padding-bottom:0px;
        }

        div.invoice-details {
            float:left;
			padding-bottom:10px;
        }

        div.clear-fix {
            clear:both;
            float:none;
        }

        table {
            width:100%;
        }

        th {
            text-align: left;
        }

        td {
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

		 }


@media (min-width: 601px)and (max-width: 850px){

			   body {
            font-family: Verdana;
        }

        div.invoice {
        border:3px solid black;
        padding:10px;
		margin-left:100px;
		margin-top:50px;
        height:370pt;
        width:300pt;

        }

        div.company-name {

            text-align:center;
			padding-top:10px;
			padding-bottom:0px;
        }

        div.invoice-details {
            float:left;
			padding-bottom:10px;
        }

        div.clear-fix {
            clear:both;
            float:none;
        }

        table {
            width:100%;
        }

        th {
            text-align: left;
        }

        td {
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

		 }


@media (min-width: 851px)and (max-width: 1100px){

			   body {
            font-family: Verdana;
        }

        div.invoice {
        border:3px solid black;
        padding:10px;
		margin-left:200px;
		margin-top:50px;
        height:370pt;
        width:450pt;

        }

        div.company-name {

            text-align:center;
			padding-top:10px;
			padding-bottom:0px;
        }

        div.invoice-details {
            float:left;
			padding-bottom:10px;
        }

        div.clear-fix {
            clear:both;
            float:none;
        }

        table {
            width:100%;
        }

        th {
            text-align: left;
        }

        td {
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
.footer{
  background-color: blue;
}

		 }
        </style>
    </head>

    <body>
    <div class="invoice">
        <div class="company-name">
           <h1 style="color:#446294;">Ali Traders<h1>
        </div>
		<p style="text-align:center; padding-top:0px;"><b>Adress: </b>Street#5</p>
		<p style="text-align:center; padding-top:0px;"><b>Phone# </b>03---------</p>

        <div class="invoice-details">
            <pre><h3>Invoice number : <b>517</b></pre></h3>
    <pre><h3>Date: <b>24/03/2020</b>   				Customer Name: <b>Ali Awan</b></h3></pre>

        </div>

        <div class="clear-fix"></div>
            <table border='1' cellspacing='0'>
                <tr style="text-indent:7px;background-color:#446294;color:white;">
					<th>Name</th>
                    <th>Quantity</th>
                    <th>Rate</th>
                    <th>Total</th>
                </tr>
				<tr style="text-indent:7px;">
                    <td>Test product</td>
                    <td> 10</td>
                    <td>10</td>
                    <td>100</td>
                </tr>
				</table>

				<table border="0" cellspacing='2' style="margin-top:30px;">
                <tr style="text-indent:7px;">
					<th>Total Egg</th>
                    <td>100</td>
					<th>Total Egg</th>
                    <td>100</td>

                </tr>
				<tr style="text-indent:7px;">
					<th>Total</th>
                    <td>100</td>
					<th>Total</th>
                    <td>100</td>
                </tr>
				<tr style="text-indent:7px;">
					<th>Amount</th>
                    <td>100</td>
					<th>Amount</th>
                    <td>100</td>
                </tr>
				</table>
		<footer  style=" margin-top:80;background-color:red;">

			<h2 style="text-align:center" class="footer">Exprsol.com</h2>

		</footer>

        </div>

    </body>


</html>
