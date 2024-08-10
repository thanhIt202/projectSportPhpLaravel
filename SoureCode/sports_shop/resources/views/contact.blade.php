@extends('layouts.master')
@section('title', 'Liên Hệ')
@section('contact')
active
@stop()
@section('main')

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{ url('')}}">TrangChủ</a></li>
                <li class='active'>Liên Hệ</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="contact-page">
            <div class="row">

                <div class="col-md-12 contact-map outer-bottom-vs">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6597100371273!2d105.78243413461533!3d21.04629764300459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1c9e359e2a4f618c!2sB%C3%A1ch%20Khoa%20Aptech!5e0!3m2!1svi!2s!4v1671352144896!5m2!1svi!2s"
                        width="600" height="450" style="border:0"></iframe>

                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4 contact-info">
                    <div class="contact-title">
                        <h4>Thông tin</h4>
                    </div>
                    <div class="clearfix address">
                        <span class="contact-i"><i class="fa fa-map-marker"></i></span>
                        <span class="contact-span">Tòa Nhà HTC, 250 Hoàng Quốc Việt, Cổ Nhuế, Cầu Giấy, Hà Nội</span>
                    </div>
                    <div class="clearfix phone-no">
                        <span class="contact-i"><i class="fa fa-mobile"></i></span>
                        <span class="contact-span">+(888) 123-4567<br>+(888) 456-7890</span>
                    </div>
                    <div class="clearfix email">
                        <span class="contact-i"><i class="fa fa-envelope"></i></span>
                        <span class="contact-span"><a href="#">ABC@themesground.com</a></span>
                    </div>
                </div>
              

            </div><!-- /.contact-page -->
        </div>
        <hr>
    </div>
</div>

@endsection