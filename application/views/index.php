<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Browserception</title>
	<link rel="stylesheet" href="/assets/css/bootstrap-theme.css">
	<link rel="stylesheet" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/assets/css/normalize.css">
	<script type="text/javascript" src="/assets/js/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="/assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="/assets/js/ajax-post-script.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="form">
					<form action="Get_URL" method="post">
						<div class="form-group">
							<label for="url"></label>
							<input type="text" class="form-control" id="url" name="url" placeholder="Enter URL">
							<button type="submit" class="btn btn-default">Submit</button>
						</div>
					</form>
				</div>
				<div id="display"></div>
			</div>
		</div>
	</div>
</body>
</html>