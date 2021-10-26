
<!doctype>
<html>
<head>
<title>Commbank - Cannvalate</title>
<meta name="csrf-token" content="{{csrf_token()}}" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="https://www.simplify.com/commerce/simplify.pay.js"></script>
<style>
    body {
        background: url(https://simplify.cannvalate.com.au/public/assets/images/blue-bg-4.jpg) no-repeat!important;
    }
</style>
</head>
<body>
   
        
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
               
    
    <div class="container">
        
        <div class="col-md-3">
            
        </div>
        <div class="col-md-6 text-center">
            <br><img src="https://simplify.cannvalate.com.au/public/assets/images/cvl-logo.png" alt="Cannvalate"><hr style="border-color:#565960;">
           
           <script type="text/javascript"
            src="https://www.simplify.com/commerce/simplify.pay.js"></script>

            <iframe name="my-hosted-form"
                data-sc-key="sbpb_ZDJkODk4Y2QtNjI2NC00NjQ5LTk1NTAtZjU0ODUwMmYwNWVi"
                data-name="CVL"
                data-description="Cannvalate"
                data-reference="99999"
                data-amount="15"
                data-color="#12B830"
                width="535" height="450" style="border:0; background: #fff; border-radius: 3px;">
            </iframe>
            
            <script>
                SimplifyCommerce.hostedPayments(
                    function(response) {
                        console.log(response);
                        var CSRF_TOKEN = jQuery('meta[name="csrf-token"]').attr('content');
                       

                        jQuery.ajax({
                            url: '/submit',
                            type: 'POST',
                            data: {_token: CSRF_TOKEN, response:response},
                            dataType: 'JSON',
                            success: function (data) { 
//                               
                                console.log(data);
                            } 
                        });
                   }
                ).closeOnCompletion();
            </script>

        </div>
        <div class="col-md-3">
            
        </div>
    </div>
    <footer class="text-center" style="width: 100%; bottom: 0; position: absolute;">
        <p style="color:#fff;">&copy; 2021 ASN Business Solutions. All rights reserved.</p>
    </footer>
</body>
</html>