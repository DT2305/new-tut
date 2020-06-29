@extends('layouts.master')
@section('title','Trường đại học Kỹ Thuật - Công nghê Cần Thơ')
@section('breadcrumb_1')
    Chào mừng đến với trường <br> Đại học Kỹ thuật Công nghệ Cần Thơ
@endsection
@section('content')
    <section class="site-section element-animate">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-2">
                    <div class="block-16">
                        <figure>
                            <img src="img/ctut_building.jpg" alt="Image placeholder" class="img-fluid">
                            <a href="/videos/ctut.mp4" class="play-button popup-vimeo"><span
                                    class="ion-ios-play"></span></a>

                            {{--                        <a href="https://vimeo.com/45830194" class="button popup-vimeo" data-aos="fade-right" data-aos-delay="700"><span class="ion-ios-play"></span></a> --}}

                        </figure>
                    </div>
                </div>
                <div class="col-md-6 order-md-1">

                    <div class="block-15">
                        <div class="heading">
                            <h2>LỊCH SỬ PHÁT TRIỂN</h2>
                        </div>
                        <div class="text mb-5">
                            <p>Hơn 30 năm hình thành và phát triển, Trung tâm Đại học Tại chức Cần Thơ luôn hoàn thành xuất
                                sắc nhiệm vụ chính trị do Tỉnh ủy, Ủy ban nhân dân tỉnh Cần Thơ (nay là Thành ủy, Ủy ban
                                nhân dân thành phố Cần Thơ) giao chuẩn hóa cán bộ, nâng cao dân trí, thực hiện xã hội hóa
                                giáo dục, ...</p>
                        </div>
                        <p><a href="{{route('history')}}" class="btn btn-primary reverse py-2 px-4">Xem Thêm</a></p>

                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- END section -->
@endsection
