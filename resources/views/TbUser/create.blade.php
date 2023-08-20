<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>User</title>
</head>
<body>
    <center><h1 class="text-center mb-4"> Create User</h1></center>
    <form action="/user/store" method="post">
    {{ csrf_field() }}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="text" class="form-control" name="password" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="birthday" class="form-label">Birthday<label>
                                <input type="date" class="form-control" name="birthday" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="no_ktp" class="form-label">NO KTP</label>
                                <input type="text" class="form-control" name="no_ktp" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" aria-label="Default select example" name="status" required="required">
                                    <option>choose</option>
                                    <option value="Non Active">Non Active</option>
                                    <option value="Active">Active</option>
                                </select>                            
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-select" aria-label="Default select example" name="role" required="required">
                                    <option>choose</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Pengelola Koperasi">Pengelola Koperasi</option>
                                    <option value="Anggota">Anggota</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Data</button>
                            <a href="user" type="" class="btn btn-primary">Kembali</a> 
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