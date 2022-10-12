<footer style="background: #4470BD;">
    <div class="container pt-5 pb-5 mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="d-none d-lg-block"><img src="{{ asset('assets/images/logo.png') }}" style="width: 200px; position: absolute; top: 20%;" alt=""></div>
                <div class="text-center d-sm-block d-lg-none"><img src="{{ asset('assets/images/logo.png') }}" style="width: 200px;" alt=""></div>
            </div>
            <div class="col-md-4">
                <div class="accordion-container">
                    <div class="set">
                        <a href="javascript:void(0)">
                            About Us
                            <i class="fa fa-plus"></i>
                        </a>
                        <div class="content">
                            <div class="px-4">
                                <a href="">Vision</a>
                            </div>
                            <div class="px-4">
                                <a href="">Board of Directors</a>
                            </div>
                        </div>
                    </div>
                    <div class="set">
                        <a href="javascript:void(0)">
                            School
                            <i class="fa fa-plus"></i>
                        </a>
                        <div class="content">
                            <div class="px-4">
                                <a href="">History</a>
                            </div>
                            <div class="px-4">
                                <a href="">Sponsor a class</a>
                            </div>
                            <div class="px-4">
                                <a href="">Teacher</a>
                            </div>
                        </div>
                    </div>
                    <div class="set">
                        <a href="javascript:void(0)">
                            Get Involved
                            <i class="fa fa-plus"></i>
                        </a>
                        <div class="content">
                            <div class="px-4">
                                <a href="">Sponsor a student</a>
                            </div>
                            <div class="px-4">
                                <a href="">Sponsor a class</a>
                            </div>
                            <div class="px-4">
                                <a href="">Gift a student sponsorship</a>
                            </div>
                        </div>
                    </div>
                    <div class="set">
                        <a href="{{ route('contact-us') }}">
                            Contact Us
                            {{-- <i class="fa fa-plus"></i> --}}
                        </a>
                        {{-- <div class="content">
                            <p> Donec tincidunt consectetur orci at dignissim. Proin auctor aliquam justo, vitae
                                luctus odio pretium scelerisque. </p>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center mt-4">
                <div class="d-flex flex-column">
                    <div class="row">
                        <div><i class="p-3 text-light fa-brands fa-lg fa-facebook-f"></i></div>
                        <div><i class="p-3 text-light fa-brands fa-lg fa-instagram"></i></div>
                        <div><i class="p-3 text-light fa-brands fa-lg fa-twitter"></i> </div>
                        <div><i class="p-3 text-light fa-brands fa-lg fa-linkedin"></i></div>
                    </div>
                    
                    <div class="mt-3">
                        <a style="background: #fff; padding: 10px 20px; border-radius: 20px;" class="btn btn-block" href="">Donate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>