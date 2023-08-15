<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>CRUD </title>
</head>
<body>
    <div class="container">
        <div class="row" style="margin:5px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <h2>LOAN</h2>
                    </div>
                    <div class="card-body">
                        <a href="/add-loan" class="btn btn-success btn-sm" title="Add New Bill">Add New Loan</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No Loan</th>
                                        <th>Member Id</th>
                                        <th>Payment Method ID</th>
                                        <th>Description</th>
                                        <th>Loan Amount</th>
                                        <th>Loan Interest</th>
                                        <th>Admin Fee</th>
                                        <th>Total Loan</th>
                                        <th>Total Installment</th>
                                        <th>Tenor</th>
                                        <th>Start At</th>
                                        <th>End At</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($loans as $loan)
                                    <tr>
                                        <td>{{ $loan->no_loan }}</td>
                                        <td>{{ $loan->member_id}}</td>
                                        <td>{{ $loan->payment_method_id }}</td>
                                        <td>{{ $loan->description }}</td>
                                        <td>Rp.{{number_format($loan->loan_amount) }}</td>
                                        <td>Rp.{{ number_format($loan->loan_interest) }}</td>
                                        <td>Rp.{{ number_format($loan->admin_fee) }}</td>
                                        <td>Rp.{{ number_format($loan->total_loan) }}</td>
                                        <td>Rp.{{ number_format($loan->total_installment) }}</td>
                                        <td>{{ $loan->tenor }}</td>
                                        <td>{{ $loan->start_at }}</td>
                                        <td>{{ $loan->end_at }}</td>
                                        <td>
                                            <a href="/loan/{{ $loan->id }}" title="Edit Loan"><button class="btn btn-primary">Edit</button></a>
                                            <a href="/loan/delete/{{ $loan->id }}" title="Delete Loan"><button class="btn btn-danger">Delete</button></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $loans->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
