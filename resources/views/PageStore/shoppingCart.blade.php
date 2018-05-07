@extends('layouts.masterStore')
@section('content')
	<div class="container">
		
		<h1 >Shopping Cart</h1>
		<br>
		<div id="content">
			
			<div class="table-responsive">
				<!-- Shop Products Table -->
				<table class="shop_table " cellspacing="0">
					<thead>
						<tr>
							<th class="product-name">Image</th>
							<th class="product-name">Product</th>
							<th class="product-price">Price</th>
							<th class="product-quantity">Qty.</th>
							<th class="product-subtotal">Total</th>
							<th class="product-remove">Remove</th>
						</tr>
					</thead>
					<tbody>
					
						<tr class="cart_item">
							<td>

								<img class="pull-left" src="web/images/slide/grid-img2.jpg" alt="" height="50">

							</td>

							<td class="product-name">
								<div class="media">
									
									<div class="media-body">
										<p class="font-large table-title">Men’s Belt</p>
										<a class="table-edit" href="#" style="color: blue">Edit</a>
									</div>
								</div>
							</td>

							<td class="product-price">
								<span class="amount">$235.00</span>
							</td>

							
							<td class="product-quantity">
								<input type="text" name="quantity" value="" size="1">
								<!-- <select name="product-qty" id="product-qty">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select> -->
							</td>

							<td class="product-subtotal">
								<span class="amount">$235.00</span>
							</td>

							<td class="product-remove">
								<a href="#" class="remove" title="Remove this item"><i class="fa fa-trash-o"></i></a>
							</td>
						</tr>
						
					</tbody>

					
				</table>
				<!-- End of Shop Table Products -->
			</div>


			<!-- Cart Collaterals -->
			<div class="cart-collaterals">

				<div class="cart-totals pull-right">
					<div class="cart-totals-row"><span style="color:red">Order Total:</span> <span style="color:red">$188.00</span></div>
				</div>

				<div class="clearfix"></div>
			</div>
			<!-- End of Cart Collaterals -->
			<div class="clearfix"></div>

		</div> <!-- #content -->
	</div> <!-- .container -->
@stop