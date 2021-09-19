<?php
  $sql = "SELECT f_id, f_name FROM tbl_freelancers Order by f_name";
  $query = mysqli_query($connection,$sql);
  

?>


<select id="free" class="form-control">
<option>Select Freelancers</option>
<?php
  while( $rows = mysqli_fetch_array($query))
  {

?>

<option value="<?= $rows['f_id']?>"><?= $rows['f_name']?></option>

<?php
  }

?>
</select>
<div class="result"></div>