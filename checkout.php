<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Checkout Page Discoveryvip.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <style>
        input[type="number"] {
            width: 50px;
        }
    </style>
</head>

<body>
  <div id="content">
    <div class="container">
        <h1>Shopping Checkout</h1>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
            <input type="hidden" name="cmd" value="_cart">
            <input type="hidden" name="upload" value="1">
            <input type="hidden" name="business" value="seller@dezignerfotos.com">
            <table class="table table-hover">
                <thead class="thead-inverse">
                    <tr>
                        <th>Remove</th>
                        <th>Qty</th>
                        <th>Item Name</th>
                        <th>Cost</th>
                        <th class="text-xs-right">Subtotal</th>
                    </tr>
                </thead>
                <tbody id="output"> </tbody>
            </table>
            <input type="submit" class="btn btn-primary btn-block" value="Checkout with PayPal"> <a href="products.php" class="btn btn-success">Continue Shopping</a> </form>
    </div>
  </div>
  <div id="editor"></div>
  <button id="cmd">Generate PDF</button>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
    <script>
        var shopcart = [];
        $(document).ready(function () {
            outputCart();
            $('#output').on('click','.remove-item',function(){
                var itemToDelete = $('.remove-item').index(this);
                shopcart.splice(itemToDelete,1);
                sessionStorage["sca"] = JSON.stringify(shopcart);
                outputCart();              
            })
            
            
            
            $('#output').on('change', '.dynqua', function () {
                var iteminfo = $(this.dataset)[0];
                var itemincart = false;
                var removeItem = false;
                var itemToDelete = 0;
                console.log(shopcart);
                var qty = $(this).val();
                $.each(shopcart, function (index, value) {
                    if (value.id == iteminfo.id) {
                        if (qty <= 0) {
                            removeItem = true;
                            itemToDelete = index;
                        }else{
                            shopcart[index].qty = qty;
                            itemincart = true;
                        }
                    }
                })
                if(removeItem){
                    shopcart.splice(itemToDelete,1);
                }
                
                sessionStorage["sca"] = JSON.stringify(shopcart);
                outputCart();
            })

            function outputCart() {
                if (sessionStorage["sca"] != null) {
                    shopcart = JSON.parse(sessionStorage["sca"].toString());
                }
                console.log(sessionStorage["sca"]);
                console.log(shopcart);
                var holderHTML = '';
                var total = 0;
                var itemCnt = 0;
                $.each(shopcart, function (index, value) {
                    var stotal = value.qty * value.price;
                    var a = (index + 1);
                    total += stotal;
                    itemCnt += parseInt(value.qty);
                    holderHTML += '<tr><td><span class="btn btn-danger remove-item">x</span></td><td><input size="5"  type="number" class="dynqua" name="quantity_' + a + '" value="' + value.qty + '" data-id="' + value.id + '"></td><td><input type="hidden" name="item_name_' + a + '" value="' + value.name + ' ' + value.s + '">' + value.name + '(' + value.s + ')</td><td><input type="hidden" name="amount_' + a + '" value="' + formatMoney(value.price) + '"> $' + formatMoney(value.price) + ' </td><td class="text-xs-right"> ' + formatMoney(stotal) + '</td></tr>';
                })
                holderHTML += '<tr><td colspan="4" class="text-xs-right">Total</td><td class="text-xs-right">$' + formatMoney(total) + '</td></tr>';
                $('#output').html(holderHTML);
            }

            function formatMoney(n) {
                return (n / 100).toFixed(2);
            }
        })
		
	var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {   
    doc.fromHTML($('#content').html(), 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});


    </script>
</body>

</html>