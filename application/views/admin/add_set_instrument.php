<?php include('check.php');?>

	<header>
		<title>OSET 4.0</title>
		<link href='<?=base_url('css/style.css')?>' rel='stylesheet' type='text/css'>
	</header>

	<body class="wrapper">
		
		<?php include('header.php'); ?>
		
		<div class = "right">
		
			<h2> Add New SET Instrument </h2>
			
			<div id="formcss">
				<span class="error_msg"><?php if(isset($error_msg)) echo $error_msg; ?></span><br/><br/>
				<?php echo form_open_multipart('admin/setinstrumentmanagement/submit', array('onSubmit'=>true)); ?> 
				<table>
					<tr>
					<td>SET Name : <font color="red">*</font></td>
					<td class="element"><input type="text" name="name" value="" required></td>
					</tr>
										
					<tr>
						<td>Zip file: <font color="red">*</font></td>
						<td><input type="file" name="zipFile" size="20" /></td>
					</tr>

					<tr>
						<td colspan="2">
							<br/>
							Make sure that the <b>model</b> and <b>view</b> files have the string <b>'model'</b> and 
							<b>'view'</b> respectively in their filenames to distinguish them from the set instrument controller.</td>
					</tr>

					<tr>
						<td></td>
						<td><br/><input type="submit" value="Add"></input><a href="<?php echo base_url('index.php/admin/setinstrumentmanagement');?>"><input type="button" value="Cancel"></input></a>
						</td>
					</tr>

				</table>
				<?php form_close();?>
			</div>

		</div>
	</body>