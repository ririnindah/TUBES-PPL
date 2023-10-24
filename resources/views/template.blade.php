<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIMONE</title>
    <link rel="shortcut icon"  href='https://i.ibb.co/yBG6mSK/Simone-4.png'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('style/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('style/css/bootstrap.css')}}" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="{{asset('style/css/sb-admin.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('style/css/plugins/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('style/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">


</head>
<body>
  

@yield('content')


<script src="{{asset('style/js/jquery.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('style/js/bootstrap.min.js')}}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{asset('style/js/plugins/morris/raphael.min.js')}}"></script>
<script src="{{asset('style/js/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('style/js/plugins/morris/morris-data.js')}}"></script>
</body>
</html>