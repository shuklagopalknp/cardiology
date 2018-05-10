<?php
include('layout.php');
if(isset($_GET['state_id']))
{
	$state_id = $_GET['state_id'];
?>
<div class="form-group">
	<select name="city_id" id="city_id" class="form-control" required>
				<option value="">Select City</option>
				<?php
					$sql = "select * from districts where state_id = '".$state_id."'";
					$run = mysql_query($sql) or die("error in city fetch".mysql_error());
					while($data = mysql_fetch_array($run))
					{
						$district_id = $data['district_id'];
						$city_name = $data['districts'];
				?>
					<option value="<?php echo $district_id; ?>"><?php echo $city_name; ?></option>
				<?php } ?>
			</select>
</div>
<?php } ?>



