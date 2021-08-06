<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paypal Payment</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main id="cart-main">
        <div class="site-title text-center">
            <h1 class="font-title">Shopping Cart</h1>
        </div>

        <div class="container">
            <div class="grid">
                <div class="col-1">
                    <div class="flex item justify-content-between">
                        <div class="flex">
                            <div class="img text-center">
                                <img src="./assets/pro1.png" alt="">
                            </div>
                            <div class="title">
                                <h3>Canon EOS 1500D</h3>
                                <span>Electronics</span>

                                <div class="buttons">
                                    <button type="submit"><i class="fas fa-chevron-up"></i> </button>
                                    <input type="text" class="font-title" value="1">
                                    <button type="submit"><i class="fas fa-chevron-down"></i> </button>
                                </div>
                                <a href="#">Save for later</a> |
                                <a href="#">Delete From Cart</a>
                            </div>
                        </div>
                        <div class="price">
                            <h4 class="text-red">$349</h4>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="subtotal text-center">
                        <h3>Price Details</h3>

                        <ul>
                            <li class="flex justify-content-between">
                                <label for="price">Products ( 3 items ) : </label>
                                <span>$399</span>
                            </li>
                            <li class="flex justify-content-between">
                                <label for="price">Delivery Charges : </label>
                                <span>Free</span>
                            </li>
                            <hr>
                            <li class="flex justify-content-between">
                                <label for="price">Amout Payble : </label>
                                <span class="text-red font-title">$399</span>
                            </li>
                        </ul>
                        <?php $finalAmount = 15 ;
                        echo "La variable \$finalAmount contient : ";
                        echo $finalAmount;
                        ?>
                        
                        <div id="paypal-payment-button">

                        </div>
                    </div>
                </div>
            </div>
        </div>
<script type="text/javascript">
var a = "Variable test";
</script>

<?php
echo "<script>document.write(a);</script>" ;
?>
    </main>


    <script src="https://www.paypal.com/sdk/js?client-id=AcAUrZDfwcXyX3G0de-lbhxpiT6fqTgTBDyI31Zd9P4WdkbUX7AaoBXEbvNewQp5EpzaAvP0ZjEmUTCW&disable-funding=credit,card"></script>
    <script>
        let  final = 12;
        console.log(final);
        paypal.Buttons({
    style : {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units : [{
                amount: {
                    value:  final
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details)
            //window.location.replace("http://localhost:63342/tutorial/paypal/success.php")
        })
    },
    onCancel: function (data) {
        //window.location.replace("http://localhost:63342/tutorial/paypal/Oncancel.php")
    }
}).render('#paypal-payment-button');
    </script>
</body>
</html>
