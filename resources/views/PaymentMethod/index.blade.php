<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>CRUD Payment Method</title>
</head>
<body>
<div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <h2>Payment Method</h2>
                    </div>
                    <div class="card-body">
                        <a href="/add-payment-method" class="btn btn-success btn-sm" title="Add New Payment Method">Add New Payment Method</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Account Number</th>
                                        <th>Type</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($paymentmethods as $paymentmethod)
                                <tr>
                                    <td>{{ $paymentmethod->name }}</td>
                                    <td>{{ $paymentmethod->account_number }}</td>
                                    <td>{{ $paymentmethod->type }}</td>
                                        <td>
                                            <a href="/payment-method/{{ $paymentmethod->id }}" title="Edit paymentmethod"><button class="btn btn-primary">Edit</button></a>
                                            <a href="/payment-method/delete/{{ $paymentmethod->id }}" title="Delete paymentmethod"><button class="btn btn-danger">Delete</button></a>
                                        </td>                      
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $paymentmethods->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
</body>
</html>
