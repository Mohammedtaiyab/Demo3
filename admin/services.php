<?php
require ('include/head.php');
require ('include/header.php');
require ('include/sidebar.php');
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$service=$services->getDataid($id);
	$currentpage=$service[0]['Page'];
}
?>

<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Dashboard</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Services</li>
								</ol>
							</nav>
						</div>
					</div>
					<!--end breadcrumb-->

<section id="tabs" class="project-tab">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Description</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Section</a>
                                   
                                <a class="nav-item nav-link" id="nav-service-tab" data-toggle="tab" href="#nav-service" role="tab" aria-controls="nav-contact" aria-selected="false">Service Cards</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                
					<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Short Description</h4>
							</div>
							<hr/>
							<div class="row">
								<div class="col-md-6">
										<form action="function.php" method="POST" enctype="multipart/form-data">
											<input type="hidden" name="id" value='<?php echo $id;?>'>
											<div class="input-group mb-3">
								<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Page</span></div>
<input type="text" class="form-control" value='<?php echo $service[0]['Page']; ?>' aria-label="Username" aria-describedby="basic-addon1" disabled>
							</div>
											<div class="input-group mb-3">
								<div class="input-group-prepend">	<span class="input-group-text" id="basic-addon1">Title</span>
								</div>
<input type="text" class="form-control" name="title" value='<?php echo $service[0]['Title']; ?>' aria-label="Username" aria-describedby="basic-addon1">
							</div>
<label for="basic-url">Short_Description</label>
							<div class="input-group mb-3">
							<!-- 	<div class="input-group-prepend">
									<span class="input-group-text">Paragraph</span>
								</div> -->	
								<textarea class="form-control" id="paragraph" name="paragraph" aria-label="With textarea"><?php echo $service[0]['Short_Description']; ?></textarea>	<script>
		CKEDITOR.replace( 'paragraph' );
	</script>
							</div>


							<label for="basic-url">Button URL</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">	<span class="input-group-text" id="basic-addon3">https://www.for-Restaurant.com/</span>
								</div>
								<input type="text" class="form-control" name="url" value='<?php echo $service[0]['Button_link']; ?>' id="basic-url" aria-describedby="basic-addon3">
							</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Page Sequence No:</span></div>
<input type="number" class="form-control" name="sqno" value='<?php echo $service[0]['Code']; ?>' aria-label="Username" aria-describedby="basic-addon1">
							</div>
								<button class="btn btn-primary"  type="submit" name="updatedesc">Update</button>
										
								</div>
									<div class="col-md-6">

										 <div class="form-group">
        <label>Upload Image</label>
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="imgInp" name="image">
                </span>
            </span>
        </div>
        <img id='img-upload' src='../assets/img/pages/<?php echo $service[0]['Image']; ?>' style="width: 100%;">
    </div>
									</div>
									</form>
							</div>
						</div>
					</div>


 </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">           
<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Section</h4>
							</div>
							<hr/>
							
<?php 
$about=$sections->getData($currentpage);
?>
						<form action="function.php" method="POST" enctype="multipart/form-data">
											<input type="hidden" name="servieid" value='<?php echo $_GET['id'];?>'>
											<input type="hidden" name="id" value='<?php echo $about[0]['ID']; ?>'>
											<div class="input-group mb-3">
								<div class="input-group-prepend">	<span class="input-group-text" id="basic-addon1">Title</span>
								</div>
							<input type="text" class="form-control" name="section" value='<?php echo $about[0]['Section']; ?>' aria-label="Username" aria-describedby="basic-addon1">
							</div>
						<label for="basic-url">Long Description</label>
							<div class="input-group mb-3">
							<!-- 	<div class="input-group-prepend">
									<span class="input-group-text">Paragraph</span>
								</div> -->	
								<textarea class="form-control" id="longdesc" name="paragraph" aria-label="With textarea"><?php echo $about[0]['Paragraph']; ?></textarea>	<script>
							CKEDITOR.replace( 'longdesc' );
							</script>
							</div>
								<button class="btn btn-primary"  type="submit" name="updatesection">Update</button>
						</form>
						</div>
						</div>


                            </div>
								<div class="tab-pane fade" id="nav-section" role="tabpanel" aria-labelledby="nav-section-tab">


						<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Conatct Blocks</h4>
							</div>
							<hr/>
							
						</div>
						</div>

 									</div>
								<div class="tab-pane fade" id="nav-service" role="tabpanel" aria-labelledby="nav-service-tab">

							<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Service</h4>
							<a href='service_edit.php?id=<?php echo $id;?>' class="btn btn-primary" >Add New Section</a>
							</div>
							<hr/>
							<div class="table-responsive">
								<table id="example" class="table table-striped table-bordered" style="width:100%">
									<thead>
										<tr>
											<th>SNo:</th>
											<th>Section</th>
											<th>Paragaph</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$i=1;
										$section=$services->servicessection($id);
										foreach ($section as $page) {
												echo "<tr>
											<td>".$i."</td>
											<td>".$page['Title']."</td>
											<td>";?>
								<!-- 	<a href="#paragraph" class="paragraph" data-toggle='modal' data-id=''>View</a> -->
											</td><td>
								<a href='servicesec_edit.php?id=<?php echo $page['ID'];?>' class="btn btn-primary">Edit</button></td>
											<?php echo "</tr>";
												$i++;
											}?>
									</tbody>
									<tfoot>
										<tr>
											<th>SNo:</th>
											<th>Section</th>
											<th>Paragaph</th>
											<th>Action</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
						</div>
								
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


				</div>
			</div>
			<!--end page-content-wrapper-->
		</div>

<?php
require ('include/modals.php');
?>
<script type="text/javascript">
$(function(){
  $(document).on('click', '.paragraph', function(){
    $('#paragraph').modal('show');
  var id = $(this).data('id');
    // getRow(id);
    $('#para').html(id);
  });
    $(document).on('click', '.image', function(){
    $('#image').modal('show');
  var link = $(this).data('id');
   $("#img").attr("src","assets/images/bg-images/"+link);
  });
});
</script>
<?php
require ('include/footer.php');
require ('include/script.php');
?>