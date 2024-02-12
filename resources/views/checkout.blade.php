<!-- resources/views/checkout.blade.php -->

@extends('layouts.master')

@section('content')
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <h1>اكمال الطلب</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- checkout section -->
<div class="checkout-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="checkout-accordion-wrap">
                    <div class="accordion" id="accordionExample">
                        <!-- Billing Address Section -->
                        <div class="card single-accordion">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                       معلومات الطلب
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="billing-address-form">
                                        <form action="{{ route('complete_order') }}" method="post">
                                            @csrf
                                            <!-- Form fields for billing address -->
                                            <p><input type="text" name="name" placeholder="الاسم"></p>
                                            <p><input type="email" name="email" placeholder="البريد الالكتروني"></p>
                                            <p><input type="text" name="address" placeholder="العنوان"></p>
                                            <p><input type="tel" name="phone" placeholder="رقم الهاتف"></p>
                                            <p><textarea name="notes" id="bill" cols="30" rows="10" placeholder="ملاحظات"></textarea></p>
                                            <button type="submit" class="boxed-btn">اكمل الطلب</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Details Section -->
            <div class="col-lg-4">
                <div class="order-details-wrap">
                    <table class="order-details">
                        <thead>
                            <tr>
                                <th>تفاصيل طلبك</th>
                                <th>السعر</th>
                            </tr>
                        </thead>
                        <tbody class="order-details-body">
                            <!-- Loop through items in the cart and display details -->
                            @php $total = 0 @endphp
                            @foreach(session('cart') as $id => $details)
                                <tr>
                                    <td>{{ $details['product_name'] }}</td>
                                    <td>AED {{ $details['price'] * $details['quantity'] }}</td>
                                    @php $total += $details['price'] * $details['quantity'] @endphp
                                </tr>
                            @endforeach
                        </tbody>

                        <!-- Checkout Details Section -->
                        <tbody class="checkout-details">
                            <!-- Calculate and display subtotal, shipping, and total -->
                            @php $shipping = 10 @endphp
                            <tr>
                                <td>المجموع</td>
                                <td>AED {{ $total }}</td>
                            </tr>
                            <tr>
                                <td>التوصيل</td>
                                <td>AED {{ $shipping }}</td>
                            </tr>
                            <tr>
                                <td>المجموع الكلي</td>
                                <td>AED {{ $total + $shipping }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end checkout section -->
@endsection
