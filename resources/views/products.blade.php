@extends('layouts.master')
@section('content')

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<h1>خدماتنا</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li>جميع الخدمات</li>
                        </ul>
                    </div>
                </div>
            </div>

			<div class="row product-lists">
				@foreach($services->groupBy('ServiceName') as $serviceName => $serviceGroup)
					<div class="col-lg-4 col-md-6 text-center ">
						<div class="single-product-item">
							<h3>{{ $serviceName }}</h3>

							{{-- Print the image for the first service --}}
							<div class="product-image">
								<a href="single-product.html"><img src="assets/img/products/{{ $serviceGroup[0]->img }}" alt="" width="200" height="300"></a>
							</div>

							<div class="styled-select">
								<select class="serviceDropdown" name="serviceDropdown_{{ $serviceGroup[0]->id }}">
                                    <option value="">{{ $serviceName }}</option>

									@foreach($serviceGroup as $service)
										<option value="{{ $service->operation_id }}" data-date="{{ $service->date }}">{{ $service->operation_name }} AED  {{ $service->price }}</option>
									@endforeach
								</select>
							</div>

							<a href="#" class="cart-btn orderLink" data-service-id="{{ $serviceGroup[0]->id }}"><i class="fas fa-shopping-cart"></i> اطلب الان</a>

						</div>
					</div>
				@endforeach
			</div>

		</div>
	</div>
	<!-- end products -->

	@section('scripts')
	    <script>
	        document.querySelectorAll('.serviceDropdown').forEach(function(dropdown) {
	            dropdown.addEventListener('change', function() {
	                var selectedOption = this.options[this.selectedIndex];
	                var dateValue = selectedOption.getAttribute('data-date');
	                console.log(dateValue);

	                // Find the closest orderLink within the same product container
	                var orderLink = this.closest('.single-product-item').querySelector('.orderLink');
                    orderLink.href = "{{ route('add_to_cart', '') }}/" + selectedOption.value;
	            });
	        });
	    </script>
	@endsection

@endsection
