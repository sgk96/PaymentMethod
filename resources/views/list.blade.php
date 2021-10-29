
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Commbank - CVL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
   
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="csrf-token" content="{{csrf_token()}}" />

    <link href="https://simplify.cannvalate.com.au/public/assets/css/main.css" rel="stylesheet">

  
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                            
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
         <div class="app-sidebar sidebar-shadow">
              <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li>
                                    <a href="#" class="mm-active">
                                        <i class="metismenu-icon pe-7s-menu"></i>
                                        Payment Logs
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
               </div>    </div>    
        <div class="app-main__outer">
                   <div class="app-main__inner">
      
                        <div class="row">
                <div class="col-md-12 col-xl-12">
                    <div class="main-card mb-3 card" style="padding: 8px;">
              
                     <table class="table table-bordered display nowrap" id="tbl1" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>AMOUNT</th>
                                    <th>AUTH CODE</th>                         
                                    <th>PAYMENT STATUS</th>
                                    <th>Date</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($payments as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                     <td>{{$row->amount}}</td>
                                     <td>{{$row->authCode}}</td>
                                     <td>{{$row->paymentStatus}}</td>
                                      <td>{{$row->Date}}</td>

                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                        </div>
                   </div>
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    
                                </div>
                                <div class="app-footer-right">
                                    <p>&copy; 2021 ASN Business Solutions. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
       
    </div>


       
        </body>
</html>    