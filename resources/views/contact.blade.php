@extends('layouts.master')
@section('content')

    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>تواصل معنا</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- contact form -->
    <div class="contact-from-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="form-title">
                        <h2>تواصل معنا </h2>
                        <p>مرحبًا بك في " مصبغة فيرست كلاس "، حيث يلتقي التميز بالراحة في عناية ملابسك وسجادك. نحن نفتخر بتقديم خدمات غسيل فاخرة تجمع بين الجودة والكفاءة.

                        </p>
                    </div>
                    <div id="form_status"></div>
                    <div class="contact-form">
                        <form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
                            <p>
                                <input type="text" placeholder="الاسم" name="name" id="name">
                                <input type="email" placeholder="البريد الالكتروني" name="email" id="email">
                            </p>
                            <p>
                                <input type="tel" placeholder="رقم الهاتف" name="phone" id="phone">
                                <input type="text" placeholder="العنوان" name="subject" id="subject">
                            </p>
                            <p><textarea name="message" id="message" cols="30" rows="10" placeholder="الرسالة"></textarea></p>
                            <p><input type="submit" value="ارسل"></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-form-wrap">
                        <div class="contact-form-box">
                            <h4><i class="fas fa-map"></i> عنوان المحل</h4>
                            <p>دبا - الفجيرة  <br> شارع شريف مول<br> خلف عيادة تداوي</p>
                        </div>
                        <div class="contact-form-box">
                            <h4><i class="far fa-clock"></i> مواعيد العمل</h4>
                            <p> 8 AM to 1 PM
                            <br>4 PM to 12 PM </p>
                        </div>
                        <div class="contact-form-box">
                            <h4><i class="far fa-comment"></i>  التواصل الاجتماعي</h4>
                            <ul>
                                <p><a href="https://www.facebook.com/laundry.dibba" target="_blank"><i class="fab fa-facebook-f"></i></a> &nbsp;&nbsp;
                                <a href="https://www.instagram.com/fc_laundry?igsh=NTc4MTIwNjQ2YQ==" target="_blank"><i class="fab fa-instagram"></i></a> &nbsp;&nbsp;
                             <a href="https://t.snapchat.com/ip9iAk0C" target="_blank"><i class="fab fa-snapchat"></i></a></p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact form -->

    <!-- find our location -->
    <div class="find-location blue-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p> <i class="fas fa-map-marker-alt"></i> عنوان المحل</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end find our location -->

    <!-- google map section -->
    <div class="embed-responsive embed-responsive-21by9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14392.315663459003!2d56.2717256!3d25.6022938!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef433a538a3a3db%3A0x7c7290a96e1d39d3!2z2YXYtdio2LrYqSDZgdmK2LHYs9iqINmD2YTYp9iz!5e0!3m2!1sar!2seg!4v1706899491453!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
    </div>
    <!-- end google map section -->

@endsection
