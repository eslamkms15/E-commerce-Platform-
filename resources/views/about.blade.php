@extends('layouts.master')
@section('content')

<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <h1>مصبغة فيرست كلاس</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- خدماتنا -->
<div class="feature-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="featured-text">
                    <h2 class="pb-3">لماذا <span class="orange-text">مصبغة فيرست كلاس</span></h2>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-4 mb-md-5">
                            <div class="list-box d-flex">
                                <div class="list-icon">
                                    <i class="fas fa-shipping-fast"></i>
                                </div>
                                <div class="content">
                                    <h3>توصيل سريع</h3>
                                    <p>نقدم خدمة توصيل سريع لراحتك.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                            <div class="list-box d-flex">
                                <div class="list-icon">
                                    <i class="fas fa-money-bill-alt"></i>
                                </div>
                                <div class="content">
                                    <h3>أفضل الأسعار</h3>
                                    <p>نوفر أفضل الأسعار لخدماتنا.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                            <div class="list-box d-flex">
                                <div class="list-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div class="content">
                                    <h3>صناديق مخصصة</h3>
                                    <p>نقدم خيارات صناديق مخصصة لاحتياجاتك الخاصة.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="list-box d-flex">
                                <div class="list-icon">
                                    <i class="fas fa-sync-alt"></i>
                                </div>
                                <div class="content">
                                    <h3>غسيل سريع</h3>
                                    <p>نقدم خدمة غسيل سريع لضمان رضا العملاء.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart banner section -->
<section class="cart-banner pt-100 pb-100">
    <div class="container">
        <div class="row clearfix">
            <!--Image Column-->
            <div class="image-column col-lg-6">
                <div class="image">
                    <div class="price-box">
                        <div class="inner-price">
                            <span class="price">
                                <strong>30%</strong> <br> discount
                            </span>
                        </div>
                    </div>
                    <img src="assets/img/a.jpg" alt="">
                </div>
            </div>
            <!--Content Column-->
            <div class="content-column col-lg-6">
                <h3><span class="orange-text"> خصم</span> الشهر</h3>
                <h4>علي جميع انواع الغسيل</h4>
                <div class="text">علي جميع أنواع الغسيل من اليوم و حتي 30/2/2024</div>
                <!--Countdown Timer-->
                <div class="time-counter"><div class="time-countdown clearfix" data-countdown="2024/3/01"><div class="counter-column"><div class="inner"><span class="count">00</span>Days</div></div> <div class="counter-column"><div class="inner"><span class="count">00</span>Hours</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Mins</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Secs</div></div></div></div>
                <a href="/shop" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> اطلب الان</a>
            </div>
        </div>
    </div>
</section>
<!-- end cart banner section -->
<!-- فريقنا -->
<div class="mt-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3>فريقنا <span class="orange-text">المميز</span></h3>
                    <p>نحن نفخر بفريق عملنا المحترف والمخصص لخدمتكم بكل رعاية وجودة.</p>
                </div>
            </div>
        </div>

        </div>
    </div>
</div>

<!-- قسم الشهادات -->
<div class="testimonail-section mt-80 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="testimonial-sliders">
                    <!-- يمكنك إضافة المزيد من الشهادات هنا -->
                    <div class="single-testimonial-slider">
                        <div class="client-avater">
                            <img src="assets/img/avaters/avatar1.png" alt="">
                        </div>
                        <div class="client-meta">
                            <h3>سائرة حكيم <span>صاحبة محل محلي</span></h3>
                            <p class="testimonial-body">
                                "تجربة رائعة مع مصبغة فيرست كلاس، خدمة سريعة وجودة عالية."
                            </p>
                            <div class="last-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <!-- إضافة مزيد من الشهادات حسب الحاجة -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
