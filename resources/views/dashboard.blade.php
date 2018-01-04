<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head profile="http://www.w3.org/1999/xhtml/vocab">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="http://shoppica.themesnap.net/misc/favicon.ico" type="image/vnd.microsoft.icon" />  
    <title>Admin Panel</title>
    <link type="text/css" rel="stylesheet" href="../css/x.css" media="all" />
    <link type="text/css" rel="stylesheet" href="../css/t.css" media="all" />
    <link type="text/css" rel="stylesheet" href="../css/m.css" media="all" />
    <link type="text/css" rel="stylesheet" href="../css/p.css" media="all" />
    <link type="text/css" rel="stylesheet" href="../css/c.css" media="screen" />
    <link type="text/css" rel="stylesheet" href="../css/a.css" media="all" />
    <script type="text/javascript" src="../js/x.js"></script>
    <script type="text/javascript" src="../js/o.js"></script>
    <script type="text/javascript" src="../js/w.js"></script>
    <script type="text/javascript" src="../js/l.js"></script>
    <script type="text/javascript" src="../js/s.js"></script>
    <script type="text/javascript" src="../js/b.js"></script>
    <script type="text/javascript" src="../js/c.js"></script>
    
</head>
<body class="s_layout_fixed html front not-logged-in no-sidebars page-node" >
<div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable">Skip to main content</a>
</div>
<div id="wrapper">
    <!-- ---------------------- -->
    <!--      H E A D E R       -->
    <!-- ---------------------- -->
    <div id="header" class="container_12">
        <div class="grid_12">
            <a id="site_logo" href="/"><img src="pic/logo.png" title="Shoppica" alt="Shoppica" /></a>
            @if (Auth::guest())
            <div id="system_navigation" class="s_nav">
                <ul class="s_list_1 clearfix">
                    <li><a href="{{ url('../user/login') }}">Log in</a></li>
                    <li><a href="{{ url('../user/reg') }}">Register</a></li>
                </ul>
            </div>
            @else
            <div id="system_navigation" class="s_nav">
                <ul class="s_list_1 clearfix" role="menu">
                    <li><a href="#">{{ Auth::User()->firstName }}</a></li>
                    <li><a href="{{ url('/logout') }}">Logout</a></li>
                </ul>
            </div>
            

    <!-- ---------------------- -->
    <!--     Layout start       -->
    <!-- ---------------------- -->

    <div class="container_12">
        <div class="row">
            <table align="center" style="position:absolute; right:370px;top:300px; color:black; border=1"  class=" table-bordered ">
                <thead style="font-size:20px">
                <tr>
                    <th class="text-center">Card type</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Mobile</th>
                    <th class="text-center">Address</th>
                </tr>
                </thead>
                <tbody style="font-size:15px " >
                @foreach ($sales_silver_s as $sales_silver)
                    <tr>
                    <td class="text-center">Silver</td>
                        <td class="text-center" style="padding-right: 15px">{{$sales_silver->email}}</td>
                        <td class="text-center">{{$sales_silver->mobile}}</td>
                        <td class="text-center">{{$sales_silver->address}}</td>
                    </tr>
                @endforeach
                </tbody>
                <tbody style="font-size:15px ">
                @foreach ($sales_gold as $sales_silver)
                    <tr>
                    <td class="text-center">Gold</td>
                        <td class="text-center" style="padding-right: 15px">{{$sales_silver->email}}</td>
                        <td class="text-center">{{$sales_silver->mobile}}</td>
                        <td class="text-center">{{$sales_silver->address}}</td>
                    </tr>
                @endforeach
                </tbody>
                <tbody style="font-size:15px ">
                @foreach ($sales_platinum as $sales_silver)
                    <tr>
                    <td class="text-center">Platinum</td>
                        <td class="text-center" style="padding-right: 15px">{{$sales_silver->email}}</td>
                        <td class="text-center">{{$sales_silver->mobile}}</td>
                        <td class="text-center">{{$sales_silver->address}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
    @endif

</body>
</html>
