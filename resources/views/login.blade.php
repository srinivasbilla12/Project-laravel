@extends('master')
@section('content')
<div class="container">
<div class="contact-form">

 		
 		        <script>
		function vcontactform(){
	var name = document.getElementById('name').value;
	if((name == "")||(name == null)){
        alert("Please enter name");
		return false;
	}
	var email = document.getElementById('email').value;
	if((email == "")||(email == null)){
        alert("Please enter email address");
		return false;
	}
	var company = document.getElementById('company').value;
	if((company == "")||(company == null)){
        alert("Please enter Company Name");
		return false;
	}
	var phone = document.getElementById('phone').value;
	if((phone == "")||(phone == null)){
        alert("Please enter phone");
		return false;
	}
	
	var message = document.getElementById('message').value;
	if((message == "")||(message == null)){
        alert("Please enter message");
		return false;
	}
 } 
</script>
<form method="post" action="" id="contactform" class="form-horizontal" onsubmit="return vcontactform()">
<div class="form-group">       
<div class="col-md-12 col-sm-12 col-xs-12">
<input type="text" name="fullname" class="form-control contact-flied" placeholder="FULL NAME" required="" id="fullname" value="">
</div>
</div>
<div class="form-group">       
<div class="col-md-12 col-sm-12 col-xs-12">
<input type="text" name="company" class="form-control contact-flied" placeholder="COMPANY NAME" required="" id="company" value="">
</div>
</div>
<div class="form-group"> 
<div class="col-md-12 col-sm-12 col-xs-12">		
<input type="email" name="email" id="email" required="" placeholder="EMAIL ADDRESS" class="form-control contact-flied email">
</div> 
</div>           
<div class="form-group">            
<div class="col-md-12 col-sm-12 col-xs-12">		
<input type="text" name="phone" id="phone" required="" placeholder="CONTACT NUMBER" class="form-control contact-flied">
</div>
</div>
<div class="form-group">                  
<div class="col-sm-12 col-sm-12 col-xs-12">
<textarea name="message" id="message" required="" rows="10" placeholder="YOUR MESSAGE" class="form-control contact-flied"></textarea>
</div>
</div>
<div class="form-group">                
<div class="col-sm-12 col-sm-12 col-xs-12">
<input name="submit" id="submit" type="submit" class="btn btn-submit" value="Submit">
</div>
</div> 
</form>

</div>
</div>
@endsection