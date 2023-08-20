<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>CRUD Member</title>
</head>
<body>
<div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <h2>Member</h2>
                    </div>
                    <div class="card-body">
                        <a href="/add-member" class="btn btn-success btn-sm" title="Add New Payment Method">Add Member</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>User ID</th>
                                        <th>Type Loan Interest</th>
                                        <th>Limit Loan</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($members as $member)
                                <tr>
                                    <td>{{ $member->role }}</td>
                                    <td>{{ $member->type_loan_interest }}</td>
                                    <td>Rp.{{ number_format($member->limit_loan) }}</td>
                                        <td>
                                            <a href="/member/{{ $member->id }}" title="Edit member"><button class="btn btn-primary">Edit</button></a>
                                            <a href="/member/delete/{{ $member->id }}" title="Delete member"><button class="btn btn-danger">Delete</button></a>
                                        </td>                      
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $members->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
</body>
</html>
