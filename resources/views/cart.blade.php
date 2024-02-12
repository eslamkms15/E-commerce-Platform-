@extends('layouts.master')

@section('content')
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <h1>السلة</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- cart -->
<div class="cart-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="cart-table-wrap">
                    <table class="cart-table">
                        <thead class="cart-table-head">
                            <tr class="table-head-row">
                                <th class="product-remove"></th>
                                <th class="product-image">صورة الطلب</th>
                                <th class="product-name">الاسم</th>
                                <th class="product-price">السعر</th>
                                <th class="product-quantity">الكمية</th>
                                <th class="product-total">المجموع</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $shipping =  10 @endphp

                            @php $total = 0 @endphp
                            @php $All = 0 @endphp


                            @if(session('cart'))
                                 @foreach(session('cart') as $id => $details)
                                 @php $total += $details['price'] * $details['quantity'] @endphp



                            <tr class="table-body-row" data-id="{{ $id }}">
                                <td class="actions" data-th="">
                                    <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> حذف</button>
                                </td>
                                <td class="product-image"><img src="assets/img/products/{{ $details['photo'] }}" alt=""></td>
                                <td class="product-name">  {{ $details['ServiceName'] }}  {{ $details['product_name'] }} </td>
                                <td data-th="Price">${{ $details['price'] }}</td>
                                <td data-th="Quantity">
                                    <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity cart_update" min="1" />
                                </td>

                                <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                                                        </tr>
                            @endforeach
                            @endif
                            @php $All = $total + $shipping @endphp

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="total-section">
                    <table class="total-table">
                        <thead class="total-table-head">
                            <tr class="table-total-row">
                                <th>المجموع</th>
                                <th>السعر</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="total-data">
                                <td><strong>المجموع: </strong></td>
                                <td> AED {{ $total }}</td>
                            </tr>
                            <tr class="total-data">
                                <td><strong>التوصيل: </strong></td>
                                <td>AED {{$shipping}}</td>
                            </tr>
                            <tr class="total-data">
                                <td><strong>المجموع الكلي: </strong></td>
                                <td>AED {{ $All }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="cart-buttons">
                        <a href="{{ route('checkout') }}" class="boxed-btn black">اطلب الان</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- end cart -->
@endsection

@section('scripts')
<script type="text/javascript">

    $(".cart_update").change(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ route('update_cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });

    $(".cart_remove").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Do you really want to remove?")) {
            $.ajax({
                url: '{{ route('remove_from_cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
@endsection
