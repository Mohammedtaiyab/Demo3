<?php
require ('include/head.php');
require ('include/header.php');
require ('include/sidebar.php');
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
									<li class="breadcrumb-item active" aria-current="page">Contact</li>
								</ol>
							</nav>
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Client</h4>
							</div>
							<hr/>
							<div class="table-responsive">
								<table id="example" class="table table-striped table-bordered" style="width:100%">
									<thead>
										<tr>
											<th>SNo:</th>
											<th>Full Name</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Message</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$i=1;
										$contacts=$header->getcontact();
										foreach ($contacts as $page) {
												echo "<tr>
												<td>".$i."</td>
											<td>".$page['Fname']." ".$page['Lname']."</td>
											<td>".$page['Email']."</td>
													<td>".$page['Phone']."</td>
													<td>".$page['Company']."</td>
														<td>".$page['Location']."</td>
												
													
											<td>";?>
												<a href="#paragraph" class="paragraph" data-toggle='modal' data-id='<?php echo $page['Message'];?>'>View</a>
												<?php echo"</td>
											<td>";
											    if($page['Subscribed']==0){?>
											       <i class="lni lni-close"></i>
											   <?php  }else{ ?>
											    <i class="lni lni-checkmark-circle"></i>
											  <?php  } ?>
											</td>
										
											<td></td>
											<?php echo "
												</tr>
												";
												$i++;
										}
									?>
									</tbody>
								
								</table>
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Customer</h4>
							</div>
							<hr/>
							<div class="table-responsive">
								<table id="example" class="table table-striped table-bordered" style="width:100%">
									<thead>
										<tr>
											<th>SNo:</th>
											<th>Full Name</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Company</th>
											<th>Location</th>
											<th>Message</th>
											<th>Subscribed</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$i=1;
										$header=$header->getAllcontact();
										foreach ($header as $page) {
												echo "<tr>
												<td>".$i."</td>
											<td>".$page['Fname']." ".$page['Lname']."</td>
											<td>".$page['Email']."</td>
													<td>".$page['Phone']."</td>
													<td>".$page['Company']."</td>
														<td>".$page['Location']."</td>
												
													
											<td>";?>
												<a href="#paragraph" class="paragraph" data-toggle='modal' data-id='<?php echo $page['Message'];?>'>View</a>
												<?php echo"</td>
											<td>";
											    if($page['Subscribed']==0){?>
											       <i class="lni lni-close"></i>
											   <?php  }else{ ?>
											    <i class="lni lni-checkmark-circle"></i>
											  <?php  } ?>
											</td>
										
											<td></td>
											<?php echo "
												</tr>
												";
												$i++;
										}
									?>
									</tbody>
								
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end page-content-wrapper-->
		</div>

<?php
require ('include/modals.php');
require ('include/footer.php');
require ('include/script.php');
?>