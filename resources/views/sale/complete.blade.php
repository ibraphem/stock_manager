<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />
<!--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<!--Author      : @arboshiki-->

	<title>Untitled 4</title>
    <style>
    
    
    #inventory-invoice{
    padding: 30px;
}
#inventory-invoice a{text-decoration:none !important;}
.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #3989c6
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,.invoice table th {
    padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th{
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px;
    border:1px solid #fff;
}
.invoice table td{
    border:1px solid #fff;
}
.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #3989c6;
    font-size: 1.2em
}

.invoice table .tax,.invoice table .total,.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #0c0028
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #0c0028;
    color: #fff
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}

.invoice table tfoot tr:last-child td {
    color: #3989c6;
    font-size: 1.4em;
    border-top: 1px solid #3989c6
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 11px!important;
        overflow: hidden!important
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice>div:last-child {
        page-break-before: always
    }
}
    </style>
</head>

<body>
<div id="inventory-invoice">

    <div class="toolbar hidden-print">
        <div class="text-right">
            <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
           <!-- <button class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Export as PDF</button> -->
        </div>
        <hr>
    </div>
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                    <img src="{{asset('images/yareecee1.png')}}" alt="receipt-logo" style="height: 150px;  margin-top: -25px;">
                         <!--   <img src="asset/images/yareecee1.png" style="height: 150px;" /> -->
                    </div>
                    <div class="col company-details" style="margin-top: -55px;">
                    <sup style="color: red;"><b>REG: 887372</b></sup>
                        <h2 class="name" style="color: #0c0028;" >
                            
                            YAREECEE VENTURES
                        </h2>
                        <div><span style="color: red;"><b>Head Office:</b></span><span style="color: #0c0028;"> 13B, Baale Animashaun Road, Dalemo, Alakuko, Lagos</span></div>
                        <div><span style="color: red;"><b>Annex Office:</b></span><span style="color: #0c0028;"> 48, Fakoya Street, Egbeda, Akowonjo, Lagos</span></div>
                       <div> <span style="color: red;"><b>Telephone No:</b></span><span style="color: #0c0028;"> 08033674382, 08025719488</span></div>
                      <div>  <span style="color: red;"><b>Email:</b></span><span style="color: #0c0028;"> yareeceeventures@gmail.com</span></div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">INVOICE TO:</div>
                        <h2 class="to">{{ $sales->customer->name}}</h2>
                        <div class="address">{{ $sales->customer->address}}</div>
                        <div class="email"><a href="mailto:test@example.com">{{ $sales->customer->email}}</a></div>
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id">SALE{{$saleItemsData->sale_id}}</h1>
                        <div class="date">Date: {{ Carbon\Carbon::now() }}</div>
                        <div class="date">Employee: {{$sales->user->name}}</div>
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th class="text-left">ITEM</th>
                            <th class="text-right">PRICE</th>
                            <th class="text-right">QTY</th>
                            <th class="text-right">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($saleItems as $value)
                            <tr>
                                <td class="no">{{$value->item->item_name}}</td>
                                <td class="total">&#x20A6; &nbsp; {{$value->selling_price}}</td>
                                <td class="no">{{$value->quantity}}</td>
                                <td class="total" align="right">&#x20A6; &nbsp; {{$value->total_selling}}</td>
                            </tr>
                        @endforeach
           
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td colspan="2">SUBTOTAL</td>
                            <td>&#x20A6; &nbsp;{{ $sales->discount + $sales->grand_total - $sales->tax }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2">Discount</td>
                            <td> &#x20A6; &nbsp; {{ $sales->discount }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2">PAYMENT</td>
                            <td>&#x20A6; &nbsp; {{ $sales->payment }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2">TAX</td>
                            <td>&#x20A6; &nbsp; {{ $sales->tax }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2" style="color: red;">BALANCE</td>
                            <td style="color: red;">&#x20A6; &nbsp; {{ $sales->dues }}</td>
                        </tr>
                    </tfoot>
                </table>
                <div style="color: #0c0028;" class="thanks">Thank you!</div>
                <div class="notices">
                    <div style="color: #0c0028;"><b>No return of money after payment.</b></div>
                    <div class="notice">Goods sold in good condition are not returnable.</div>
                </div>
            </main>
            <footer>
                <div style="color: red;"><b>Dealers In All Kinds Of Electronic Appliances And General Contractors</b></div>
                <div style="color: red;"><b>Refridgerator, Freezers, Home Theatre, Generator, LCD TV, Air Condition,Electric Iron, Blender Kettle ETC</b></div>
            </footer>
        </div>
        <div></div>
    </div>
</div>
<script>
 $('#printInvoice').click(function(){
            Popup($('.invoice')[0].outerHTML);
            function Popup(data) 
            {
                window.print();
                return true;
            }
        });
</script>
</body>
</html>