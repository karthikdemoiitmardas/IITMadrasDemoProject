<header class="header">
    <div class="container">
        <div class="header__container">
            <!-- Header Logo Section -->
            <div class="header__logosection"><a href=""><img
                        src="{{ asset('images/logo.svg') }}" alt="joy-Of-giving"
                        title="Joy Of Giving" class="logo"><img
                        src="{{ asset('images/m-logo.svg') }}" alt="joy-Of-giving"
                        title="Joy Of Giving" class="m-logo"></a></div><!--  -->
            <div class="header__wrap">
                <div class="header__mwrap">
                    <ul class="header__top">
                        <li>
                            <div class="searchbox__wrapper">
                                <div class="searchbox">
                                    <form action="/search-projects" class="search-form">
                                        <p class="searchbox__search"><img
                                                src="{{ asset('images/search.svg') }}"
                                                alt="" title="" id=img></p>
                                        <input type="text" name="q" value="" placeholder="Search"
                                            autocomplete="off" class="" />

                                        <button class="submit__button " type="submit"><img
                                                src="{{ asset('images/Arrow-right.svg')}}"
                                                alt="submit" title="Submit" width="30"></button>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li class="header__login"><a href="">LOGIN</a> <a
                                href="">SIGN UP</a></li>
                        <li><a href="" class="btn">Give Every Month</a>
                        </li>
                    </ul><!-- Header Navigation Items -->
                    <nav class="navigation">
                        <div class="navigation__wrapper">
                            <ul class="navigation__menu">
                                <li class="navigation__item navigation__item--haschild"><a href="#"
                                        title="Giving Opportunities">Giving Opportunities</a>
                                    <span></span>
                                    <ul class="navigation__submenu">
                                        <li class="navigation__submenuitem ">
                                            <a href="/projects/all" title="Projects">Projects</a>
                                        </li>
                                        <li class="navigation__submenuitem ">
                                            <a href="" title="Endowments">Endowments</a>
                                        </li>
                                        <li class="navigation__submenuitem ">
                                            <a href=""
                                                title="Shaastra">Shaastra</a>
                                        </li>
                                        <li class="navigation__submenuitem ">
                                            <a href="" title="Give Every Month">Give Every Month</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="navigation__item ">
                                    <a href="" title="Why Give">
                                        Why Give
                                    </a> <span></span>
                                </li>
                                <li class="navigation__item ">
                                    <a href="" title="Ways to Give">
                                        Ways to Give
                                    </a> <span></span>
                                </li>
                                <li class="navigation__item navigation__item--haschild"><a href="#"
                                        title="Impact">Impact</a>
                                    <span></span>
                                    <ul class="navigation__submenu">
                                        <li class="navigation__submenuitem ">
                                            <a href="" title="What our Donors say">What our Donors
                                                say</a>
                                        </li>
                                        <li class="navigation__submenuitem ">
                                            <a href="" title="Donors Report">Donors Report</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="navigation__item ">
                                    <a href="" title="Donor Wall">
                                        Donor Wall
                                    </a> <span></span>
                                </li>
                                <li class="navigation__item ">
                                    <a href="" title="The Team">
                                        The Team
                                    </a> <span></span>
                                </li>
                                <li class="navigation__item ">
                                    <a href="" title="Alma Matters">
                                        Alma <i>Matters</i>
                                    </a> <span></span>
                                </li>
                                <li class="navigation__item ">
                                    <a href="" title="Faqs">
                                        Faqs
                                    </a> <span></span>
                                </li>
                                <li class="navigation__item ">
                                    <a href="" title="Get in Touch">
                                        Get in Touch
                                    </a> <span></span>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div><!--  -->
            <!-- Header Top Menu -->
            <div class="header__tools">
                <div class="menu-trigger">
                    <div class="menubtn">
                        <div class="menubtn__burger"></div>
                    </div>
                </div>
            </div><!--  -->
        </div>
    </div>
</header>