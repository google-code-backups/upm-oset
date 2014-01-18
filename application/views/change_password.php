	<header>
		<title>OSET 4.0</title>
		<link href='<?=base_url('css/style.css')?>' rel='stylesheet' type='text/css'>
	</header>

	<body class="wrapper">
		
		<?php include('header.php'); ?>
		
		<div class = "right">
		
			<h2> Change Password </h2>
			
			<div id="formcss">
				<span class="error_msg"><?php if(isset($msg)) {if($msg == "Password changed.") echo "<font color='#019901'>".$msg."</font>"; else echo $msg; }?></span><br/><br/>
				<?php echo form_open('changepassword/submit', array('onSubmit'=>true)); ?> 
				<table>
					<tr>
					<td>Old password : <font color="red">*</font></td>
					<td class="element"><input type="password" name="password" id="password" value="" required></td>
					</tr>
					
					<tr>
					<td>New password : <font color="red">*</font></td>
					<td class="element"><input type="password" name="password1" id="password" value="" required></td>
					</tr>
					
					<tr>
					<td>Confirm password : <font color="red">*</font></td>
					<td class="element"><input type="password" name="password2" id="password2" value="" required></td>
					</tr>
					
					<tr>
						<td><td><br/><input type="submit" value="Save"><a href="home"><input type="button" value="Cancel"></input></a>
					</tr>
				</table>
				<?php form_close();?>
			</div>

		</div>
	</body>