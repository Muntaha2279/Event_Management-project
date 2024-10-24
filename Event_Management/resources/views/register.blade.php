<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Event Planner</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />

</head>
<body class="d-flex justify-content-center align-items-center vh-100" style="background: linear-gradient(145deg, rgba(99, 82, 224, 1) 41%, rgba(195, 106, 196, 1) 100%)">
    <div style="box-shadow: 0px 0px 4px 1px #cdcdcd; background: lavender">
        <form action="/createuser" method="post" autocomplete="off" style="width: 400px; padding: 25px 20px">
            @csrf
            <div class="text-center mb-3" style="color: #bb0179"><h3>Register</h3></div>
            <div>
                <label class="form-label fw-bold">Full Name</label>
                <input type="text" name="name" id="name" class="form-control mb-2" required />
            </div>
            <div>
                <label class="form-label fw-bold">Email</label>
                <input type="email" name="email" id="email" class="form-control mb-2" required />
            </div>
            <div>
                <label class="form-label fw-bold">Contact No</label>
                <input type="text" name="mobile" id="mobile" class="form-control mb-2" required />
            </div>
            <div>
                <label class="form-label fw-bold">Address</label>
                <input type="text" name="address" id="address" class="form-control mb-2" required/>
            </div>
            <div>
                <label class="form-label fw-bold">Password</label>
                <input type="password" name="password" id="password" class="form-control mb-4" required />
            </div>
            <div class="text-center">
                <button class="btn btn-primary mb-4">Submit</button>
            </div>
            <div>Already have an account? Please login <a style="color:blue" href="/">here</a></div>
        </form>
    </div>
</body>
</html>
