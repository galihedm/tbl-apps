<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title & Favicon -->
    <title>TBL - Sign in</title>
    <link rel="icon" href="http://103.153.60.189/ecloud/public/img/icon.png" type="image/png">
    <link rel="apple-touch-icon" href="http://103.153.60.189/ecloud/public/img/icon.png" />
    <!-- Style -->
    <link rel="stylesheet" href="http://103.153.60.189/ecloud/public/js/plugins/fontawesome-free-5.15/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://103.153.60.189/ecloud/public/css/style.css?t=1706509084" type="text/css">
</head>

<body>

    <div class="row p-0 justify-space-between">
        
        <div class="px-5 col-md-6 bg-login align-items-center justify-content-center d-flex flex-column d-none d-md-flex" style="background-color: #ED1C24;">
        	<div class="row">
        		<div class="col-md-12 mb-3 text-end">
        			<img src="{{ asset('assets/img/logo-tbl.png') }}" class="img-fluid" alt="eranyacloud" />
        			<br>
        			<img src="{{ asset('assets/img/svg/tbl-words.svg') }}" class="img-fluid" alt="image-1" />
        		</div>
        		<div class="col-md-12 mb-5">
        			<img src="{{ asset('backend/assets/img/admin/admin_login_image.png') }}" class="img-fluid" alt="avatarlogin" />
        		</div>
        	</div>
        	<div class="col-md-12">
        		<p class="subtitle">
	                Dapatkan konten menarik dari TBL,<br>Mainkan kuisnya dan raih hadiahnya!
	            </p>
        	</div>
        </div>

        <div class="col-md-6 login-form">
            <div class="card w-75 card-login">
                <div class="card-body">
                    <h6 class="title-login">Login</h6>
                    <p class="subtitle-login">Log in to your account</p>
                    @error('login')
                        <div class="mt-3 alert alert-danger alert-dismissible" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                    @enderror
                    <form method="POST" autocomplete="off" action="{{ route('backend.processing') }}">
                    	@csrf

                        <div class="mb-2">
                            <input type="text" class="form-control form-auth" id="login" name="login"
                                placeholder="Username / Email" required autocomplete="new-login">

                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control form-auth" id="password" name="password"
                                placeholder="Password" required autocomplete="new-password">
                        </div>



                        <div class="text-center">
                            <button type="submit" class=" w-100 btn btn-main btn-round btn-lg" id="submit-btn">
                                Continue</button>
                        </div>

                        <p class="toc">By signing up, I agree with terms and conditions set by funcloud.</p>
                    </form>

                </div>
            </div>
        </div>

    </div>
    <div class="position-fixed top-0 end-0 p-3">

        <div id="error" class="toast align-items-center text-white bg-danger border-0" role="alert"
            aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>


    <script src="http://103.153.60.189/ecloud/public/js/plugins/jquery/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
