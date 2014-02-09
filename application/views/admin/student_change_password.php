	<header>
		<title>OSET 4.0</title>
		<link href='<?=base_url('css/style.css')?>' rel='stylesheet' type='text/css'>
	</header>

	<body class="wrapper">
		
		<?php include('header.php'); ?>
		
		<div class = "right">
		
			<h2>Change Student's Password </h2>
			
			<div id="formcss">
				<span class="error_msg"><?php if(isset($msg)) {if($msg == "Password changed.") echo "<font color='#019901'>".$msg."</font>"; else echo $msg; }?></span><br/><br/>
				<?php echo form_open('admin/studentaccountmanagement/changepasswordsubmit', array('onSubmit'=>true)); ?> 
				<table>
					<tr>
					<td>Student Number: <font color="red">*</font></td>
					<td class="element"><input type="text" name="student_number" value="<?php if (isset($student_number)) echo $student_number;?>" required></td>
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