
<div class="container">  
<div class="col-md-8">			
  <h4 class="title"><span class="text"><strong>User List</strong></span></h4>
  <a class="btn btn-primary" href="dashboardadmin.php?p=user">Add</a>
  
<table class="table table-bordered">
	<tr>
	<th>No.</th>
	<th>UserID</th>
	<th>Name</th>
	<th>Email</th>
	<th>Role</th>
	<th>Action</th>
	</tr>	
	<?php
		require_once('./class/class.User.php'); 		
		$objUser = new User(); 
		$arrayResult = $objUser->SelectAllUser();

		if(count($arrayResult) == 0){
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';			
		}else{	
			$no = 1;	
			foreach ($arrayResult as $dataUser) {
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$dataUser->userid.'</td>';	
					echo '<td>'.$dataUser->emp->fname.' '.$dataUser->emp->minit.' '.$dataUser->emp->lname.'</td>';
					echo '<td>'.$dataUser->email.'</td>';
					echo '<td>'.$dataUser->role.'</td>';
					echo '<td><a class="btn btn-warning btn-sm"  href="dashboardadmin.php?p=user&userid='.$dataUser->userid.'">Edit</a> |
   					          <a class="btn btn-danger btn-sm"  href="dashboardadmin.php?p=deleteuser&userid='.$dataUser->userid.'" 
							  onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')">Delete</a>							  
							  </td>';	
				echo '</tr>';
				
				$no++;	
			}
		}
		?>
</table>
</div>
</div>
