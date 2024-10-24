<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Event Planner</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <style>
        .cx019djj281 {
            background: linear-gradient(145deg, rgba(99, 82, 224, 1) 41%, rgba(195, 106, 196, 1) 100%)
        }
        .qty3891nb03 {
            background: #bb0179;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .aj7u861gt51 {
            text-align: center;
            font-weight: 500;
            color: #7d6fc9;
        }
        .sam723uewh5 {
            all: unset;
            border: none;
            background: #e9e7ff;
            width: -webkit-fill-available;
            width: -moz-available;
            border-radius: 20px;
            height: 40px;
            padding-left: 40px;
        }
        .ictr570lop1x {
            position: absolute;
            top: 10px;
            left: 15px;
            color: #7d6fc9;
        }
        .btn7328pqra9 {
            all: unset;
            background: linear-gradient(86deg, rgba(212, 112, 182, 1) 0%, rgba(134, 112, 235, 1) 100%);
            padding: 5px 20px;
            color: white;
            border-radius: 15px;
        }
        .pt0136mnbgy {
            color: white;
            font-size: 30px;
            font-weight: 500;
        }

        .NNB8941312A {
            width: 60%;
        }
        @media (max-width : 768px) {
            .NNB8941312A {
                width: 95%;
            }
        }
    </style>
</head>
<body class="cx019djj281 d-flex justify-content-center align-items-center vh-100">
    <div class="row NNB8941312A">
        <div class="col-12 col-md-7 col-lg-7 col-xl-7 p-5 d-none d-md-flex d-lg-flex d-xl-flex qty3891nb03">
            <p class="pt0136mnbgy">Welcome To Event Planner</p>
            <p class="text-white">Please register <a style="color:yellow" href="{{ url('register') }}">here</a> if you don't have an account.</p>
        </div>
        <div class="col-12 col-md-5 col-lg-5 col-xl-5 bg-white" style="padding: 100px 50px">
            <p class="aj7u861gt51">USER LOGIN</p>
            <form action="/login" method="post" class="pt-3">
                @csrf
                <div class="position-relative">
                    <i class="bi bi-person-circle ictr570lop1x"></i>
                    <input type="email" class="sam723uewh5" name="email" required/>
                </div>
                <div style="height: 20px"></div>
                <div class="position-relative">
                    <i class="bi bi-key-fill ictr570lop1x"></i>
                    <input type="password" class="sam723uewh5" name="password" required />
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn7328pqra9">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
