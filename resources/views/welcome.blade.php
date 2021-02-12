@extends('parent')

@section('content')
            <div class="container form-top">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                        <div class="panel panel-danger">
                            <div class="panel-body">
<img src="logo-td-invert-v2.png">
<br>
Something on your mind? Complete the form to let us know how we can help.<br>
                                <form method="POST" action="/" id="contact_form">
				@csrf
                                    <div class="form-group">
                                        <label >First Name</label>
                                        <input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
                                    </div>
                                    <div class="form-group">
                                        <label >Last Name</label>
                                        <input type="text" name="lastname" class="form-control" placeholder="Enter Last  Name">
                                    </div>
                                    <div class="form-group">
                                        <label >Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <label >Company Name</label>
                                        <input type="text" name="company" class="form-control" placeholder="Enter Company Name">
                                    </div>
<div class="form-group">
<label>Industry</label><br>
	<select name = "industry">
		    <option value = "Advertising" selected>Advertising</option>
		    <option value = "Corporate Strategy">Corporate Strategy</option>
		    <option value = "Motivational Speaker">Motivational Speaker</option>
		    <option value = "Accounts Payable">Accounts Payable</option>
		    <option value = "Shipping">Shipping</option>
		    <option value = "Sales">Sales</option>
	 </select>
</div>
                                    <div class="form-group">
                                        <label >Message</label>
                                        <textarea rows="3" name="message" class="form-control" placeholder="What's on your mind?"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-raised btn-lg btn-warning" type="submit">Send</button>
                                    </div>
                                </form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!--
                                <div id="error_message" style="width:100%; height:100%; display:none; ">
                                    <h4>
                                        Error
                                    </h4>
                                    Sorry there was an error sending your form.
                                </div>
                                <div id="success_message" style="width:100%; height:100%; display:none; ">
<h2>Success! Your Message was Sent Successfully.</h2>
</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@stop
