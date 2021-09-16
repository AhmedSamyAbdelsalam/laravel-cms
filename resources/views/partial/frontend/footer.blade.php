<!-- Footer Area -->
<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
    <div class="footer-static-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__widget footer__menu">
                        <div class="ft__logo">
                            <a href="index.html">
                                <img src="{{ asset('frontend/images/logo/logo.png') }}" alt="logo">
                            </a>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered duskam alteration variations of passages</p>
                        </div>
                        <div class="footer__content">
                            <ul class="social__net social__net--2 d-flex justify-content-center">
                                <li><a href="https://facebook.com" target="_blank"><i class="bi bi-facebook"></i></a></li>
                                <li><a href="https://google.com" target="_blank"><i class="bi bi-google"></i></a></li>
                                <li><a href="https://twitter.com" target="_blank"><i class="bi bi-twitter"></i></a></li>
                                <li><a href="https://linkedin.com" target="_blank"><i class="bi bi-linkedin"></i></a></li>
                                <li><a href="https://youtube.com" target="_blank"><i class="bi bi-youtube"></i></a></li>
                            </ul>
                            <ul class="mainmenu d-flex justify-content-center">
{{--                                <li><a href="index.html">Trending</a></li>--}}
{{--                                <li><a href="index.html">Best Seller</a></li>--}}
{{--                                <li><a href="index.html">All Product</a></li>--}}
{{--                                <li><a href="index.html">Wishlist</a></li>--}}
{{--                                <li><a href="index.html">Blog</a></li>--}}
{{--                                <li><a href="index.html">Contact</a></li>--}}
                                <li class="drop with--one--item"><a href="{{ route('frontend.index') }}">Home</a></li>
                                <li class="drop with--one--item"><a href="{{ route('frontend.', 'about-us') }}">About Us</a></li>
                                <li class="drop with--one--item"><a href="{{ route('frontend.', 'our-vision') }}">Our Vision</a></li>
                                <li class="drop"><a href="javascript:void(0);">Blog</a>
                                    <div class="megamenu dropdown">
                                        <ul class="item item01">
                                            @foreach($global_categories as $global_category)
                                                <li><a href="{{ route('frontend.category.posts', $global_category->slug) }}">{{ $global_category->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright__wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="copyright">
                        <div class="copy__right__inner text-left">
                            <p>Copyright <i class="fa fa-copyright"></i> <a href="https://freethemescloud.com/">Free themes Cloud.</a> All Rights Reserved</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="payment text-right">
                        <img src="{{ asset('frontend/images/icons/payment.png') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- //Footer Area -->
