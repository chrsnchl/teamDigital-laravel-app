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



    </style>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
        <link rel="stylesheet" href="form.css" >
        <!--<script src="form.js"></script>-->

</head>
<body class="td">
<div class="container">
            <div class="container form-top">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                        <div class="panel panel-danger">
                            <div class="panel-body">
                                <form id="reused_form">
                                    <div class="form-group">
<img src="logo-td-invert-v2.png">
<br>
						Something on your mind? Complete the form to let us know how we can help.<br>

                                        <label >Name</label>
                                        <input type="text" name="name" required class="form-control" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label >Email</label>
                                        <input type="email" name="email" required class="form-control" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <label >Message</label>
                                        <textarea rows="3" name="message" class="form-control" placeholder="Type Your Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-raised btn-lg btn-warning" type="submit">Send</button>
                                    </div>
                                </form>
                                <div id="error_message" style="width:100%; height:100%; display:none; ">
                                    <h4>
                                        Error
                                    </h4>
                                    Sorry there was an error sending your form. 
                                </div>
                                <div id="success_message" style="width:100%; height:100%; display:none; ">
<h2>Success! Your Message was Sent Successfully.</h2>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>
