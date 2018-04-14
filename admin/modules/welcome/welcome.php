<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<style>
	body { font: 400 1em/1.5 "Neuton"; background: #090d00; color: rgba(255,255,255,.25) }
p{
	 text-align: center; 
	 margin: 0;
	margin-top:50px;
}

  .welcome{
	
  	font: 700 6em/1 "Oswald", sans-serif;
  	letter-spacing: 0;
  	padding: .25em 0 .325em;
	  display: block;
	  margin: 0 auto;
  	text-shadow: 0 0 80px rgba(255,255,255,.5);

/* Clip Background Image */
	
	 background: url(modules/quanlysp/uploads/welcome2.png) repeat-y;
	  -webkit-background-clip: text;
	 background-clip:text;
	   
	 

/* Animate Background Image */

	  -webkit-text-fill-color: transparent;
	  -webkit-animation: aitf 80s linear infinite;

/* Activate hardware acceleration for smoother animations */

	  -webkit-transform: translate3d(0,0,0);
	  -webkit-backface-visibility: hidden;

  }


/* Animate Background Image */
@-moz-keyframes aitf {
    0% { background-position: 0% 50%; }
	100% { background-position: 100% 50%; }
}

@-webkit-keyframes aitf {
	0% { background-position: 0% 50%; }
	100% { background-position: 100% 50%; }
}
@keyframes aitf {
	0% { background-position: 0% 50%; }
	100% { background-position: 100% 50%; }
}
</style>

</head>

<body>

 <div class="welcome"><p>
    Welcome To WebAdmin<p></div>
</body>
</html>