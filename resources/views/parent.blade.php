<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>teamDigital Contact Page</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
        }

html
{
  height:100%;  
}
body.td{    
/*  background:url('images/jurassic-coast-1406284_1920.jpg') no-repeat; */
  background-size: cover;
  height:100%;
  width:100%;
background: #555;

}


.form-top{
	margin-top: 30px;
}
.td .panel{
	box-shadow: 0 1px 6px 0 rgba(0,0,0,.12), 0 1px 6px 0 rgba(0,0,0,.12);
	border-radius: 10px;
	    border: 0;
background: #2e2d2b;
color: #FFF;
}
@-moz-document url-prefix() {
    .form-control{
    	height: auto;
    }
}
.req {
    color: #f00;
}



    </style>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
        <!--<link rel="stylesheet" href="form.css" >-->
        <!--<script src="form.js"></script>-->

</head>
<body class="td">
<div id="vue-app" class="container">
	@yield('content')
</div>
    
</body>
</html>
