<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Endowment Fund Raising | Joy of Giving | Fund on Research Projects" />
    <meta name="description"
        content="Joy of Giving works towards raising endowment funds for the institute through alumni and corporations. It aims to place IITM among the ‘Top 50’ education and research institutes" />
    <meta name="keywords"
        content="Joy of Giving works towards raising endowment funds for the institute through alumni and corporations. It aims to place IITM among the ‘Top 50’ education and research institutes">
    <meta name="copyright" content="&copy; Project 2016">
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <meta name="robots" content="index, follow">
    <title>Home - Joy of Giving</title>
    <script></script>
    <script src="{{ asset('js/jquery.3.6.1.js') }}"></script>
    <script src="{{ asset('js/aos.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/smooth-scroll.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>


    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('css/aos.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>

<body>


    <x-header />
    <main>
        <section class='bannersm'
            style="background-image:url('{{ asset('images/all-projects.png')}}')">
            <div class='container'>
                <div class='bannersm__content'>
                    <h1 data-aos="fade-up" data-aos-offset="10" data-aos-duration="500">Projects</h1>
                </div>
            </div>
        </section><!--  -->
        <div class='breadcrumb'>
            <div class='container'>
                <ul aria-label='breadcrumbs'>
                    <li><a href='/'>Home</a></li>
                    <li>Giving Opportunities</li>
                    <li><a href="">Projects</a></li>
                    <li></li>
                    <li> All Projects </li>
                </ul>
            </div>
        </div>
        <section>
            <div class='container'>
                <div class='row'>
                    <div class='col-lg-3'>
                        <div class='filterbox'>
                            <img src="https://joyofgiving.alumni.iitm.ac.in/theme/jog/images/categories-icon.svg"
                                alt="categories-icon" />
                            <h4>Categories <span class="filtercollapse"></span></h4>
                            <ul class='filterbox__list'>
                                @php
                                    $categories=\App\Models\Category::all();
                                    
                                @endphp
                                 <li class="filterbox__item   "><span><a href="/projects/all">All Projects</a>
                                 </span>
                         </li>
                                @foreach ($categories as $category)
                                <li class="filterbox__item   "><span><a href="/projects/{{ $category->slug }}">{{ $category->name }}</a>
                                        </span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class=col-lg-9>
                        <h2> All Projects </h2>
                        <div id="ls_values_list" class="row project__listing">
                            @foreach ($projects as $project)
                            <div class="col-lg-4 col-sm-12 col-md-6">
                                <div class="card cardhover greencard">
                                    <a href="">
                                        <div class='card__img'>
                                            <img class="bgimg"
                                                src="{{ $project->image }}"
                                                alt="{{ $project->title }}">
                                        </div>
                                        <div class='card__content'>
                                            <h3>{{ $project->title }}</h3>
                                            <div class='range-slider'>
                                                <div class='progressbar__label'>
                                                    <div class='progressbar__label--label'>{{ $project->min }}</div>
                                                    <div class='progressbar__label--amt'>
                                                        <span>{{ $project->max }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="btn btn--white greenlabel popup__donation jg_donate_now"
                                                href="" title="Donate Now" tabindex="0" >Donate
                                                Now</a>
                                        </div>
                                        <div class='card__viewmore'><a
                                                href=""
                                                class='viewmore'>View
                                                details</a></div>
                                    </a>
                                </div>
                            </div> 
                            @endforeach
                        </div>
                        <div id="ls_values_list_msg"></div>
                        {{-- <div><button class='btn btn-loadmore' id="load_more_button">Load More Projects</button></div>
                        <div class="loadind-section loaderimg align-center">
                            <span id="project-loader" style="display:none;"><img
                                    src="https://joyofgiving.alumni.iitm.ac.in/theme/jog/images/loader.png"
                                    title="loader" alt="Loader" />
                            </span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
        <section class='dashboard'
            style="background-image:url('https://joyofgiving.alumni.iitm.ac.in/theme/jog/images/completed-projects-bg.png')">
            <div class='container'>
                <div class='dashboard__wrapper'>
                    <h2>Completed Projects</h2>
                    <p>We are incredibly grateful to those who have given generously to IIT Madras. Here are some
                        projects that have been fully funded and made possible through the munificence of our donors and
                        wellwishers.</p><a href='/projects/completed' class='btn'>View
                        Completed Projects</a>
                </div>
            </div>
        </section>
        <section class="subscribe" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <h4>Sign up for Newsletter</h4>
                </div>
                <div class="col-sm-12 col-lg-8">
                    <div class="subscribe__form" id="form">
                        <form method="POST" action="https://joyofgiving.alumni.iitm.ac.in/subscribe"
                            accept-charset="UTF-8" id="nl_sform"><input name="_token" type="hidden"
                                value="HLTcRnpW2y0RSMYUtDDZkByKDmPlXeU1v7B2lUgE">
                            <input type="text" class="text-field" id="email" name="email"
                                placeholder="Enter your email address"> <a href="javascript:;"
                                title="Subscribe"><span class="emailicon"></span></a> <a href="javascript:;"
                                class="link" title="Subscribe" id="nl_subscribe">Subscribe Now</a>
                            <span id="err_email" class="showsuccessmsg hide__block">Please enter Valid Email
                                Address</span>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 border">
                    <div class="footer__firstcol">
                        <div class="logo"><a href=""><img src="{{ asset('images/logo.svg') }}"
                                    alt="Joy of giving" title="Joy Of Giving" class="logo"></a></div>
                        <p class=content>Joy of Giving to IITM is a fundraising platform intended to aid IIT Madras'
                            journey
                            towards global distinction in the fields of engineering education and research.</p>
                        <div class="social">
                            <ul class="socialmedia">
                                <li><a target="_BLANK" href=""><img src="{{ asset('images/linkedin.svg') }}"
                                            alt="linkedin" title="linkedin"></a>
                                </li>
                                <li><a target="_BLANK" href=""><img src="{{ asset('images/twitter.svg') }}"
                                            alt="twitter" title="twitter"></a>
                                </li>
                                <li><a target="_BLANK" href=""><img src="{{ asset('images/youtube.svg') }}"
                                            alt="youtube" title="youtube"></a>
                                </li>
                                <li><a target="_BLANK" href=""><img src="{{ asset('images/facebook.svg') }}"
                                            alt="facebook" title="facebook"></a>
                                </li>
                                <li><a target="_BLANK" href=""><img src="{{ asset('images/instagram.svg') }}"
                                            alt="facebook" title="instagram"></a>
                                </li>
                            </ul>
                            <div class="bimp">
                                <img style="cursor:pointer;cursor:hand;" src="{{ asset('images/bitmap.png') }}"
                                    alt="go daddy verify security" title="go daddy verify security"
                                    onclick="verifySeal();" alt="SSL site seal - click to verify" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 border">
                    <div class="footer__seccol">
                        <h3>Visit</h3>
                        <div class="category">
                            <ul>
                                <li>
                                    <a title="IIT Madras" href="" target="_blank">IIT
                                        Madras</a>

                                </li>
                                <li>
                                    <a title="Canadian Friends of IITM" href="" target="_blank">Canadian
                                        Friends of IITM</a>

                                </li>
                                <li>
                                    <a title="IITM Foundation" href="" target="_blank">IITM Foundation</a>

                                </li>
                                <li>
                                    <a title="SocIITy" href="" target="_blank">SocIITy</a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 border">
                    <div class="footer__thirdcol">
                        <h3>Useful links</h3>
                        <div class="category">
                            <ul>
                                <li>
                                    <a title="The Team" href="/the-team">The Team</a>
                                </li>
                                <li>
                                    <a title="Chair-Professorship-Brochure" href=""
                                        target="_blank">Chair-Professorship-Brochure</a>
                                </li>
                                <li>
                                    <a title="Annual Giving Reports" href="/agr">Annual Giving Reports</a>
                                </li>
                                <li>
                                    <a title="IT Documents" href="/itdocs">IT Documents</a>
                                </li>
                                <li>
                                    <a title="Wire Transfer Details" href="" target="_blank">Wire Transfer
                                        Details</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bsec">
            <div class="container">
                <div class="flex">
                    <div class="bg_black">
                        <div class="footer__privaypolicy">
                            <ul class="policyblock">

                                <li><a href="">Terms of Use</a></li>
                                <li><a href="">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="">
                        <p class="footer__copyright">© 2024 - Joy of Giving to IITM</p>
                    </div>
                    <div class="blockoverlay"></div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scrolltop -->
    <div class="scrolltop" style="">
        <a href="#" class="scrolltop__circle" title="Scroll to Top"></a>
    </div>
    <!-- Scrolltop -->
    <script>
        $(document).ready(function() {});
    </script>


</body>

</html>
