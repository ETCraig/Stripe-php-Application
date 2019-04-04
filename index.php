<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='.styles/styles.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Pay Page</title>
</head>
<body>
    <div class="container">
    <h2 class="my-4 text-center">Intro to php Course [$60]</h2>
        <form action="./charge.php" method="post" id="payment-form">
            <div class="form-row">
            <input name='first_name' class='form-control mb-3 StripeElement StripeElement--empty' placeholder="First Name">
            <input name='last' class='form-control mb-3 StripeElement StripeElement--empty' placeholder="Last Name">
            <input name='email' type='email' class='form-control mb-3 StripeElement StripeElement--empty' placeholder="Email">
                <div id="card-element" class="form-control">
                </div>

                <div id="card-errors" role="alert"></div>
            </div>
        <button>Submit Payment</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="./js/charge.js"></script>
</body>
</html>