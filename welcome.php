<?php 
session_start();
include('header.php');
include_once("db_connect.php");
?>
<title>Welcome User</title>
<script type="text/javascript" src="script/ajax.js"></script>

<div class="container">
	<h2>Welcome User</h2>	
		
		<br>
		<br>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-left"></ul>
			</ul>
		</div>
		
		
		
		<div style="margin:50px 0px 0px 0px;">
			<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="index.php" title="">Back</a>			
		</div>	
</div>	
<?php include('footer.php');?> 