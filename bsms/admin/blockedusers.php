
<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_GET['blockid']))
{
  $blockedid=intval($_GET['blockid']);
  $sql="update tblusers set status='1' where id=:blockedid";
  $query=$dbh->prepare($sql);
  $query->bindParam(':blockedid',$blockedid,PDO::PARAM_STR);
  $query->execute();
  echo "<script>alert('restored successfuly');</script>"; 
  echo "<script>window.location.href = 'userregister.php'</script>";
}
?>
<div class="card-body">
 <table  class="table table-bordered table-striped">
  <thead>
    <tr>
      <th class="text-center">Names</th>
      <th class="text-center">Mobile</th>
      <th class="text-center">Email</th>
      <th class="text-center">Permission</th>
      <th class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php
   
   $sql="SELECT * from tblusers where status='0'";
   $query = $dbh -> prepare($sql);
   $query->execute();
   $results=$query->fetchAll(PDO::FETCH_OBJ);
   $cnt=1;
   if($query->rowCount() > 0)
   {
    foreach($results as $row)
      {?>
       <tr>
         <td><a href="#"><?php  echo htmlentities($row->name);?> <?php  echo htmlentities($row->lastname);?></a></td>
         <td class="text-left">0<?php  echo htmlentities($row->mobile);?></td>
         <td class="text-left" ><?php  echo htmlentities($row->email);?></td>
         <td class="text-left"><?php  echo htmlentities($row->permission);?></td>
         <td class="text-left">
          <center>
           <a class="btn btn-sm btn-danger" href="blockedusers.php?blockid=<?php echo ($row->id);?>" onclick="return confirm('Do you really want to unblock user ?');" title="Restore this User">unblock</i></a>
           <a href="#" class="btn btn-sm btn-danger delete_user" data-id="<?php echo ($row->id);?>" title="click to delete">Delete</a>
          </center>
          </td>
       </tr>
       <?php 
     }
   } ?>
 </tbody>
</table>
</div>
<!-- /.card-body -->
  <script type="text/javascript">
    $(document).ready(function(){
      $('.delete_user').on('click', function(){
        var delete_id = $(this).data('id');
        if(confirm('Are you sure you want to delete this user?')) {
          $.ajax({
            url: 'delete_users.php',
            type: 'POST',
            data: {delete_id: delete_id},
            success: function(response){
              alert(response);
              window.location.href = 'userregister.php';
            },
            error: function(xhr, status, error) {
              console.error(xhr);
            }
          });
        }
      });
    });
</script>
