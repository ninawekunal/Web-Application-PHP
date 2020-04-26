 <!DOCTYPE html>
 <html>
 <head>
 	<title>Home Insurance</title>
 	<style type="text/css">
 		#tableHouse tr td,th{
 			text-align: center;
 			padding:10px;
 		}
 	</style>

 </head>
 <body class="sb-nav-fixed">
 	<?php 
		require_once 'header.php';
	 ?>
 	<div id="layoutSidenav_content">
                <?php 
                	require_once 'home_ins_header.php';
                 ?>

                 
                 <div class="home_ins_content">
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i> Payments</div>
                            <div class="card-body">
                                <div class="row">
                                	<!--Invoice generated-->
		                            <div class="col-xl-12">
		                            	<div class="row justify-content-center">
		                                <div class="card mb-4">
		                                    <div class="card-header"><i class="fas fa-list mr-1"></i>Invoices generated and payment due <b>(2)</b> </div>
		                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas>
		                                    	<table border="1" id="invoice_details">
		                                    		<thead>
		                                    			<tr>
		                                    				<th>Invoice Number</th>
			                                    			<th>Policy Number</th>
			                                    			<th>Home id</th>
			                                    			<th>Installment id</th>
			                                    			<th>Invoice Date(xx/xx/YYYY)</th>
			                                    			1) Have created this row "invoice date". In the Oracle model we only had "invoice due date" </br>
			                                    			<th>Invoice Due Date(xx/xx/YYYY)</th>
			                                    			2) Fill in the month/date or date/month in the heading later
			                                    			<th>Invoice Amount($)</th>
		                                    			</tr>
		                                    		</thead>
		                                    		<tbody align="center">
		                                    			<tr>
		                                    				<td>1</td>
		                                    				<td>1</td>
		                                    				<td>2</td>
		                                    				<td>8</td>
		                                    				<td>11/11/2011</td>
		                                    				<td>12/12/2012</td>
		                                    				<td>2300</td>
		                                    			</tr>
		                                    		</tbody>
		                                    	</table>
		                                    </div>
		                                </div>
		                            	</div>
		                            </div>

		                            <!--Payment history-->
		                            <div class="col-xl-12">
		                                <div class="card mb-4">
		                                    <div class="card-header"><i class="fas fa-home mr-1"></i>Payment history </div>
		                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas>
		                                    	<table border="1" id="Payment">
		                                    		<thead>
		                                    			<tr>
		                                    				<th>Payment Id</th>
			                                    			<th>Policy Number</th>
			                                    			<th>Home ID</th>
			                                    			<th>Home location</th>
			                                    			<th>Payment date(xx/xx/YYYY)</th>
			                                    			<th>Payment type</th>
			                                    			<th>Payment amount($)</th>
		                                    			</tr>
		                                    		</thead>
		                                    		<tbody align="center">
		                                    			<tr>
		                                    				<td>1</td>
		                                    				<td>1</td>
		                                    				<td>1</td>
		                                    				<td>New York</td>
		                                    				<td>24th Apr 2020</td>
		                                    				<td>PayPal</td>
		                                    				<td>2300</td>
		                                    			</tr>
		                                    			<tr>
		                                    				<td>2</td>
		                                    				<td>3</td>
		                                    				<td>2</td>
		                                    				<td>New J</td>
		                                    				<td>22th Apr 2020</td>
		                                    				<td>Debit</td>
		                                    				<td>	100</td>
		                                    			</tr>
		                                    		</tbody>
		                                    	</table>
		                                    </div>
		                                </div>
		                            </div>

                                	<!--Payment due-->
		                            <div class="col-xl-12">
		                                <div class="card mb-4">
		                                    <div class="card-header"><i class="fas fa-calculator mr-1"></i>Make Installment Payment<b></b> </div>
		                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas>
		                                    	<form method="POST" accept-charset="UTF-8" style="color:black;margin-top: -50px;" id="auto_pay">
		                                    		
		                                    			<div class="dropdown">
                                              				<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="payment_home">
                                                			Select House
                                                			</button>
                                              				<div class="dropdown-menu">
                                                				<a class="dropdown-item">1. New York</a>
                                                				<a class="dropdown-item">2. New J</a>
                                              				</div>
                                              			</div>
                                              			
                    									<br>
                                              		
                                                  		<div class="dropdown">
                                              				<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="payment_method">
                                                			Method of payment
                                                			</button>
                                              				<div class="dropdown-menu">
                                                				<a class="dropdown-item">PayPal</a>
                                                				<a class="dropdown-item">Credit</a>
                                                				<a class="dropdown-item">Debit</a>
                                                				<a class="dropdown-item">Cheque</a>
                                              				</div>
                                              			</div>	
                                              		
                                              		<br>
                                              		<!--Submit button-->
                                              		<div>
                                                          <input class="btn btn-primary col-md-4" id="makePayment" class="form-control" type="Submit" name="pay_home">
                                              		</div>

		                                    	</form>
		                                    </div>
		                                </div>
		                            </div>

		                        </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </main>

                <!-- After main footer should come. -->
                <?php 
                	require_once 'footer.php';
                 ?>
            </div>
         </div>      <!-- This is the ending of the header -->
 </body>
 </html>