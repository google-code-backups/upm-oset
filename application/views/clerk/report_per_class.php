	<header>
		<title>OSET 4.0</title>
		<link href='<?=base_url('css/style.css')?>' rel='stylesheet' type='text/css'>
	</header>

	<body class="wrapper">
		
		<?php include('header.php'); ?>
		
		<div class = "right">
		<h2>Class Detailed Report <?php echo "(".$user_college_name.")"; ?></h2>
		
		<div class="tabs">
		<table cellpadding="3">
			<tr>
			<td align = "center"><a href = "#"><div class = "selectedtabH">View Report</div></a>
			<td align = "center"><a href = "<?php echo base_url('index.php/clerk/reportmanagement/reportperclassarchive');?>"><div class = "tabH">Search Report Archive</div></a>
			</tr>
		</table>
		</div>
		<?php 
			$sem = substr($SET['semester'], 4, 1);
			if($sem == 1)
				$sem = "1st Semester";
			else {
				$sem = "2nd Semester";
			}
			$year = substr($SET['semester'], 0, 4);
			$year2 = $year+1;
		?>
		<br/><br/>
		<?php echo form_open('clerk/reportmanagement/searchreportperclass', array('onSubmit'=>true)); ?>
		<table>
			<tr>
				<td>A.Y.-Sem: </td>
				<td width="190"><input type="text" size="22" value='<?php echo ' '.$year.'-'.$year2.' '.$sem; ?>'></td>
				<td>Subject:</td>
				<td width="180"><input type="text" name="subject" <?php if(isset($search['subject'])) echo "value=".$search['subject']; ?> ></td>
				<td>Department: </td>
				<td width="220">
					<select name="department">
						<option value = "">All departments</option>
						<?php
							if(!isset($search['department']))
								$search['department'] = "";
							for ($i = 0; $i < count($departments['department_code']); $i++)
							{
								echo '<option value="'.$departments['department_code'][$i].'"';
								if($search['department'] == $departments['department_code'][$i]) 
									echo " selected";
								echo '>'.$departments['department_name'][$i].'</option>';
							}
						?>	
					</select>
				</td>
				<td></td>
				<td><input type="submit" value="Search"></td>
			</tr>
		</table>
		<?php echo form_close(); ?>
		<br/>
		
		<?php 
		   	if($records)
			{
			    echo '
			    <table class="records">
			    	<tr>
			    	<th>Subject</th>
			    	<th>Section</th>
			    	<th>Instructor</th>
			    	<th></th>
			    	</tr>';
				    	 
			    	$i = 0;
			    	foreach ($records['oset_class_id'] as $id)
					{
						echo 
							"<tr>
								<td>".$records['subject'][$i]."</td>
								<td>".$records['section'][$i]."</td>
								<td>".$records['instructor'][$i]."</td>
								<td><a target='_blank' href='".base_url('index.php/clerk/set/'.$records['controller_name'][$i].'/generateReportPerClass/'.$id)."'>View report</a></td>
		  					 </tr>";
							$i++;
					}
					echo '</table>';
			}
			else 
			{
				echo 'There is no class which evaluation process is already closed.';
			}	
		   ?>
		</div>
	
		<br/><br/>
		
		</div>

	</body>