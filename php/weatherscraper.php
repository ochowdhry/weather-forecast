<!doctype html>
<html>
<head>
	<title>Weather Scraper</title>
	<meta charset="utf-8" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<style>
	
		html, body {
			
			height:100%;
		
		}
		
		.container {
			
			background-image:url("background.jpg");
			height:100%;
			width:100%;
			background-size:cover;
			background-position:center;	
			padding-top:175px;
			
		}
		
		.center {
			
			text-align:center;
		}
		
		.white {
			
			color:#F0FFFF;
		}
		
		h1 {
			font-size:4em;
		}
		
		.report {
			
			display:none;
			font-size:1.5em;
			margin-top:40px;
		}
		
		button {
			
			margin-top:20px;
		}

	
	</style>
</head>

<body>

	<div class="container">
		
		<div class="row">
		
			<div class="col-md-6 col-md-offset-3 center">
			
				<h1 class="white center">Weather Report</h1>
				
				<p class="white lead">Enter your city below to get weather forecast</p>
				
				<form>
					
					<div class="form-group">
					
						<input type="text" class="form-control" id="city" name="city" placeholder="Enter city name here..." />
					
					</div>
					
					<button id="findWeather" class="btn btn-primary btn-lg">Weather Forecast</button>
					
				</form>
				
				<div class="white report"></div>
			
			</div>
		
		</div>
		
	</div>


<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script>

	$("#findWeather").click(function(event) {
		
		event.preventDefault();
		
		$(".report").hide();
		
		if ($("#city").val() != "") {
		$.get("scraper.php?city="+$("#city").val(), function(data) {
			
			if(data==""){
				$(".report").html("City not found").fadeIn();
				
			} else {
			$(".report").html(data).fadeIn();
			
			}
			
		});
		
		} else {
			
			$(".report").html("Please enter a city").fadeIn();
		}
	});

</script>
</body>

</html>