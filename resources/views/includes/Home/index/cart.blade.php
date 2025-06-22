<!-- Cart Slider Wrap -->
<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="cartSlider" aria-labelledby="cartSliderLabel">
	<div class="offcanvas-header border-bottom">
		<h6 class="offcanvas-title" id="cartSliderLabel">Your cart Items</h6>
		<a href="JavaScript:Void(0);" class="square--35 circle text-muted-2 border" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x"></i></a>
	</div>
	<div class="offcanvas-body">
		<div class="cartItems w-100">
			<div class="d-flex align-items-center justify-content-start flex-column gap-3">

				<!-- Single Item -->
				<div class="singleCartitem d-flex align-items-center justify-content-between gap-4 w-100">
					<div class="d-flex align-items-center justify-content-start gap-3">
						<div class="cartiteThumb"><figure class="d-block m-0"><img src="" class="img-fluid rounded-2" width="60" alt=""></figure></div>
						<div class="cartCaption">
							<h6 class="lh-base m-0">Spicy Burger</h6>
							<p class="m-0">1x$25.50</p>
						</div>
					</div>

					<div class="removeItemcart"><a href="" class="square--35 circle badge-secondary"><i class="bi bi-x"></i></a></div>
				</div>

				<!-- Single Item -->
				<div class="singleCartitem d-flex align-items-center justify-content-between gap-3 w-100">
					<div class="d-flex align-items-center justify-content-start gap-3">
						<div class="cartiteThumb"><figure class="d-block m-0"><img src="" class="img-fluid rounded-2" width="60" alt=""></figure></div>
						<div class="cartCaption">
							<h6 class="lh-base m-0">Premium Package</h6>
							<p class="m-0">1x$22.10</p>
						</div>
					</div>

					<div class="removeItemcart"><a href="" class="square--35 circle badge-secondary"><i class="bi bi-x"></i></a></div>
				</div>

				<!-- Single Item -->
				<div class="singleCartitem d-flex align-items-center justify-content-between gap-3 w-100">
					<div class="d-flex align-items-center justify-content-start gap-3">
						<div class="cartiteThumb"><figure class="d-block m-0"><img src="" class="img-fluid rounded-2" width="60" alt=""></figure></div>
						<div class="cartCaption">
							<h6 class="lh-base m-0">Platinum Plaster</h6>
							<p class="m-0">1x$17.40</p>
						</div>
					</div>

					<div class="removeItemcart"><a href="" class="square--35 circle badge-secondary"><i class="bi bi-x"></i></a></div>
				</div>

			</div>

			<div class="cartSubtotal w-100 py-3 border-top mt-3">
				<h6 class="m-0">Subtotal: $128.75</h6>
			</div>

		</div>

		<div class="cartButtons w-100 py-2">
			<div class="d-flex align-items-center justify-content-center flex-wrap gap-2">
				<a href="{{ url('/viewcart') }}" class="btn btn-md btn-light-primary fw-medium flex-fill">View Cart</a>
				<a href="{{ url('/checkout-page') }}" class="btn btn-md btn-primary fw-medium flex-fill">Checkout</a>
			</div>
		</div>
	</div>
</div>
