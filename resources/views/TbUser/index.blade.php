<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>CRUD User</title>
</head>
<body>
<div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <h2>USER</h2>
                    </div>
                    <div class="card-body">
                        <a href="/add-user" class="btn btn-success btn-sm" title="Add New User">Add New USER</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Birthday</th>
                                        <th>No KTP</th>
                                        <th>Status</th>
                                        <th>Role</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($tbusers as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->password }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>{{ $user->birthday }}</td>
                                    <td>{{ $user->no_ktp }}</td>
                                    <td>{{ $user->status }}</td>
                                    <td>{{ $user->role }}</td>
                                        <td>
                                            <a href="/user/{{ $user->id }}" title="Edit User"><button class="btn btn-primary">Edit</button></a>
                                            <a href="/user/delete/{{ $user->id }}" title="Delete User"><button class="btn btn-danger">Delete</button></a>
                                        </td>                      
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $tbusers->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
</body>
</html>