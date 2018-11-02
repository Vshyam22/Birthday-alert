<?php
require_once("common/common.php");
PAGE::pageHeader(INDEX_PAGE);
?>
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Employee Name</th>
                                        <th>Email</th>
                                        <th>DOB</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
									$query = "select * from employee_details";
									$result = DB::run($query);
									foreach($result as $row) {
								?>
                                    <tr>
                                        <th scope="row"><?php echo $row['emp_id']; ?> </th>
                                        <td><?php echo $row['emp_name']; ?></td>
                                        <td><?php echo $row['emp_email']; ?></td>
                                        <td><?php echo $row['emp_dob']; ?></td>
                                    </tr>
									<?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

<?php
PAGE::pageFooter(INDEX_PAGE);
?>