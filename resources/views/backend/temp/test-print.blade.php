
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Receipt example</title>
</head>
<body>
<span id="js-hidden-ajax-test_print-url" hidden>{{route('test.print.invoice.html')}} </span>
<button id="btnPrint" class="hidden-print">Print</button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

    const $btnPrint = document.querySelector("#btnPrint");
    $btnPrint.addEventListener("click", () => {
        var test_print_url = $('#js-hidden-ajax-test_print-url').text();
        $.ajax({
            type:'get',
            url:test_print_url,
            success:function (response) {
                console.log('');
                if(response.success) {
                    var originalContents = document.body.innerHTML;
                    window.document.body.innerHTML = response.html;
                    window.print();
                }
            }
        });
    });
</script>
</body>
</html>