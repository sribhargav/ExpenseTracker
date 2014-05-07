<html>
	<head>
		<title>Roomate Expense Tracker</title>

		<link href="css/bootstrap.min.css" rel="stylesheet" />

		<style>
			.btn-custom {
				background-color: hsl(202, 100%, 16%) !important;
				background-repeat: repeat-x;
				filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#0081cc", endColorstr="#003351");
				background-image: -khtml-gradient(linear, left top, left bottom, from(#0081cc), to(#003351));
				background-image: -moz-linear-gradient(top, #0081cc, #003351);
				background-image: -ms-linear-gradient(top, #0081cc, #003351);
				background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #0081cc), color-stop(100%, #003351));
				background-image: -webkit-linear-gradient(top, #0081cc, #003351);
				background-image: -o-linear-gradient(top, #0081cc, #003351);
				background-image: linear-gradient(#0081cc, #003351);
				border-color: #003351 #003351 hsl(202, 100%, 10%);
				color: #fff !important;
				text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.39);
				-webkit-font-smoothing: antialiased;
			}
		</style>
	</head>
	<body>
		<form id="loginForm">
			<div class="alert alert-danger">

			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						<div class="login-panel panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Roomate Expense Tracker Login!</h3>
							</div>
							<div class="panel-body">
								<fieldset>
									<div class="form-group">
										<input type="text" name="username" class="form-control" placeholder="Username" />
									</div>
									<div class="form-group">
										<input type="password" name="password" class="form-control" placeholder="Password" />
									</div>
									<!-- Change this to a button or input when using this as a form -->
									<input type="submit" value="Log In" class="btn btn-primary btn-custom" />
								</fieldset>
							</div>
						</div>
					</div>
				</div>
			</div>
			</h:form>
	</body>
</html>