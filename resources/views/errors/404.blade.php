
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MOPHY - Payment Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('asset') }}/images/favicon.png">
    <link href="{{ url('asset') }}/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-5">
                    <div class="form-input-content text-center error-page">
                        <h1 class="error-text font-weight-bold">404</h1>
                        <h4><i class="fa fa-exclamation-triangle text-warning"></i>this page is under development</h4>
                        <p>You may have mistyped the address or the page may have moved.</p>
						<div>
                            <a class="btn btn-primary" href="{{ url()->previous() }}">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{ url('asset') }}/vendor/global/global.min.js"></script>
<script src="{{ url('asset') }}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="{{ url('asset') }}/js/custom.min.js"></script>
<script src="{{ url('asset') }}/js/deznav-init.js"></script>

</html>
