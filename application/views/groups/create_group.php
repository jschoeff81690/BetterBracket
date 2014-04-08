<!DOCTYPE html>
<?php
//var_dump($query);
?>


<html lang="en">
<head>
<?php
$data['title'] = " BB : Create a Group";
$this->load->view('template/header_files',$data);
?>

</head>

<body>
	<?php $this->load->view('template/navbar');?>

	<div class="container">

		<div class="jumbotron">
			<?php if(isset($_POST['groupname'])){
				echo "<p><b>You made a group!</b></p>";
}?>
			<h1>Create a Group</h1>

		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">

				<button>Create a Group</button>
				<form action="<?php echo base_url();?>groups/addgroup" method="post">
					Group Name: <input type="text" name="groupname"> Description: <input
						type="text" name="description"> Caption: <input type="text"
						name="caption">
					<p></p>
					<input type="submit" value="Create Group">
				</form>
			</div>
		</div>
	</div>



	<?php $this->load->view('template/footer_scripts'); ?>
	<!-- custom script -->
	<script>
		$(document).ready(
		function(){
		  $('form').hide()
		  $("button").click(function(){
		    $("form").toggle();
		  });
		}
		);
		</script>

</body>
</html>
