<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Payment Method</title>
</head>
<body>
    <center><h1 class="text-center mb-4"> Edit Payment Method</h1></center>
    <form action="/payment-method/update/{{$paymentmethods->id}}" method="post">
    {{ csrf_field() }}
    {{method_field ('PATCH')}}
    <input type="hidden" name="id" value="{{$paymentmethods->id}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" required="required" value="{{$paymentmethods->name}}">
                            </div>
                            <div class="mb-3">
                                <label for="account_number" class="form-label">Account Number</label>
                                <input type="text" class="form-control" name="account_number" required="required" value="{{$paymentmethods->account_number}}">
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label">Type</label>
                                <input type="text" class="form-control" name="type" required="required" value="{{$paymentmethods->type}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Save Data</button>
                            <button type="submit" class="btn btn-primary">Kembali</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    
    <br>
    <br>
    
 
</body>
</html>