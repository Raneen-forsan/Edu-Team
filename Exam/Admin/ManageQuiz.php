<?php include('include/header.php');?>

<div class="container-fluid" style="padding-bottom: 270px;">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
		<form>
			<div class="col-sm-12  d-flex justify-content-center" style="padding-top: 120px;">
				<h2>Manage Quiz<h2>
			</div>
			<div class="d-flex justify-content-center py-5">
			<a href="Choose_Quiz.php">
				<button type="button" class="btn btn-outline-primary pl-5 pr-5 mr-2">Add Exam</button>
			</a>
			<a href="editdeleteexaminterface.php"><button type="button" class="btn btn-outline-danger pl-4 pr-4 mr-2"> Delete Exam info</button></a>
			<a href="editdeleteexaminterface.php"><button type="button" class="btn btn-outline-primary pl-4 pr-4 mr-2">Update Exam info</button></a>
                <a href="editdeleteexaminterface.php"><button type="button" class="btn btn-outline-primary pl-4 pr-4 mr-2">Show Exam info</button></a>
			</div>
                    
                    
            
		</form>
		</div>
		<div class="col-sm-3"></div>
	</div>
</div>

<?php include('include/footer.php');?>