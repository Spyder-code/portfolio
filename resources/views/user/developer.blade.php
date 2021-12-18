<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--==================== UNICONS ====================-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">

        <!--==================== SWIPER CSS ====================-->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/swiper-bundle.min.css">

        <!--==================== CSS ====================-->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/styles-dev.css">

        <!--==================== FavIcon ====================-->
        <link rel="icon" href="{{asset('images/logo-icon.png')}}" type="image/png" />

        <title>About Developer</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#header" class="nav__logo">Aziz Almi</a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list grid">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">
                                <i class="uil uil-estate nav__icon"></i> Home
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">
                                <i class="uil uil-user nav__icon"></i> User
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#skills" class="nav__link">
                                <i class="uil uil-file-alt nav__icon"></i> Skills
                            </a>
                        </li>
                        <!-- <li class="nav__item">
                            <a href="" class="nav__link">
                                <i class="uil uil-briefcase-alt nav__icon"></i> Services
                            </a>
                        </li> -->
                        <li class="nav__item">
                            <a href="#portfolio" class="nav__link">
                                <i class="uil uil-scenery nav__icon"></i> Portfolio
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">
                                <i class="uil uil-message nav__icon"></i> Message
                            </a>
                        </li>
                    </ul>
                    <i class="uil uil-times nav__close nav__icon" id="nav-close"></i>
                </div>
                <div class="nav__btns">
                    <i class="uil uil-moon change-theme" id="theme-button"></i>
                    <div class="nav__toggle" id="nav-toggle">
                        <i class="uil uil-apps nav__icon"></i>
                    </div>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__content grid">
                        <div class="home__social">
                            <a href="" class="home__social-icon">
                                <i class="uil uil-linkedin-alt"></i>
                            </a>
                            <a href="" class="home__social-icon">
                                <i class="uil uil-dribbble"></i>
                            </a>
                            <a href="" class="home__social-icon">
                                <i class="uil uil-github-alt"></i>
                            </a>
                        </div>
                        <div class="home__img">
                            <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <mask id="mask0" mask-type="alpha">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547
                                    130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775
                                    97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666
                                    0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                </mask>
                                <g mask="url(#mask0)">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346
                                    165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403
                                    129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028
                                    -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                    <image class="home__blob-img" x='12' y='18' xlink:href="{{ asset('assets') }}/images/profil_1.png"/>
                                </g>
                            </svg>
                        </div>
                        <div class="home__data">
                            <h1 class="home__title">Hi, I'am Muhammad Aziz Almi</h1>
                            <h3 class="home__subtitle">Fullstack Web Developer</h3>
                            <p class="home__subtitle">High-level experience in web developer and development knowledge, producing quality work.</p>
                            <a href="#contact" class="button button--flex">
                                Contact me <i class="uil uil-message button__icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <h2 class="section__title">About me</h2>
                <span class="section__subtitle">My introduction</span>
                <div class="about__container container grid">
                    <img src="{{ asset('assets') }}/images/profil_2.png" alt="" class="about__img">
                    <div class="about__data">
                        <p class="about__description">
                            Web developer, with extensive knowledge and year of experience, working in web technologies and focus on backend developer, delivering quality work.
                        </p>
                        <div class="about__info">
                            <div>
                                <span class="about__info-title">02+</span>
                                <span class="about__info-name">Year <br> experience</span>
                            </div>
                            <div>
                                <span class="about__info-title">12+</span>
                                <span class="about__info-name">Completed <br> project</span>
                            </div>
                            <div>
                                <span class="about__info-title">2+</span>
                                <span class="about__info-name">Companies <br> worked</span>
                            </div>
                        </div>

                        <div class="about__button">
                            <a href="#contact" class="button button--flex">
                                Contact me for CV <i class="uil uil-download-alt button__icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== SKILLS ====================-->
            <section class="skills section" id="skills">
                <h2 class="section__title">Skills</h2>
                <span class="section__subtitle">My technical level</span>
                <div class="skills__container container grid">
                    <div>
                        <!--==================== SKILLS 1====================-->
                        <div class="skills__content skills__close">
                            <div class="skills__header">
                                <i class="uil uil-brackets-curly skills__icon"></i>

                                <div>
                                    <h1 class="skills__title">Frontend Developer</h1>
                                    <span class="skills_subtitle">More than 3 years</span>
                                </div>
                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>
                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">HTML</h3>
                                        <span class="skills__number">Advanced</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage"></span>
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">CSS</h3>
                                        <span class="skills__number">Advanced</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage"></span>
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">JavaScript</h3>
                                        <span class="skills__number">Advanced</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage"></span>
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Bootstrap</h3>
                                        <span class="skills__number">Advanced</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage"></span>
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Taildwind</h3>
                                        <span class="skills__number">Advanced</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage"></span>
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">React</h3>
                                        <span class="skills__number">Intermediate</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage"></span>
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Vue</h3>
                                        <span class="skills__number">Intermediate</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--==================== SKILLS 2====================-->
                        <div class="skills__content skills__close">
                            <div class="skills__header">
                                <i class="uil uil-server-network skills__icon"></i>

                                <div>
                                    <h1 class="skills__title">Backend Developer</h1>
                                    <span class="skills_subtitle">More than 3 years</span>
                                </div>
                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>
                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">PHP</h3>
                                        <span class="skills__number">Advanced</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage"></span>
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Laravel</h3>
                                        <span class="skills__number">Advanced</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage"></span>
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Codeigniter</h3>
                                        <span class="skills__number">Advanced</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage"></span>
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">NodeJs</h3>
                                        <span class="skills__number">Advanced</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--==================== SKILLS 3====================-->
                        <div class="skills__content skills__close">
                            <div class="skills__header">
                                <i class="uil uil-android skills__icon"></i>

                                <div>
                                    <h1 class="skills__title">Android Developer</h1>
                                    <span class="skills_subtitle">More than 1 years</span>
                                </div>
                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>
                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">React Native</h3>
                                        <span class="skills__number">Intermediate</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage"></span>
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Unity</h3>
                                        <span class="skills__number">Basic</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <!--==================== SKILLS 4====================-->
                            <div class="skills__content skills__close">
                                <div class="skills__header">
                                    <i class="uil uil-swatchbook skills__icon"></i>
                                        <div>
                                            <h1 class="skills__title">Designer</h1>
                                            <span class="skills_subtitle">More than 3 years</span>
                                        </div>
                                        <i class="uil uil-angle-down skills__arrow"></i>
                                    </div>
                                    <div class="skills__list grid">
                                        <div class="skills__data">
                                            <div class="skills__titles">
                                                <h3 class="skills__name">Adobe XD</h3>
                                                <span class="skills__number">Advanced</span>
                                            </div>
                                            <div class="skills__bar">
                                                <span class="skills__percentage"></span>
                                            </div>
                                        </div>
                                        <div class="skills__data">
                                            <div class="skills__titles">
                                                <h3 class="skills__name">Photoshop</h3>
                                                <span class="skills__number">Advanced</span>
                                            </div>
                                            <div class="skills__bar">
                                                <span class="skills__percentage"></span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div>
                            <!--==================== SKILLS 5====================-->
                            <div class="skills__content skills__close">
                                <div class="skills__header">
                                    <i class="uil uil-bag skills__icon"></i>
                                        <div>
                                            <h1 class="skills__title">Tools</h1>
                                            <span class="skills_subtitle">More than 3 years</span>
                                        </div>
                                        <i class="uil uil-angle-down skills__arrow"></i>
                                    </div>
                                    <div class="skills__list grid">
                                        <div class="skills__data">
                                            <div class="skills__titles">
                                                <h3 class="skills__name">Git</h3>
                                                <span class="skills__number">Advanced</span>
                                            </div>
                                            <div class="skills__bar">
                                                <span class="skills__percentage"></span>
                                            </div>
                                        </div>
                                        <div class="skills__data">
                                            <div class="skills__titles">
                                                <h3 class="skills__name">Gitlab</h3>
                                                <span class="skills__number">Advanced</span>
                                            </div>
                                            <div class="skills__bar">
                                                <span class="skills__percentage"></span>
                                            </div>
                                        </div>
                                        <div class="skills__data">
                                            <div class="skills__titles">
                                                <h3 class="skills__name">Github</h3>
                                                <span class="skills__number">Advanced</span>
                                            </div>
                                            <div class="skills__bar">
                                                <span class="skills__percentage"></span>
                                            </div>
                                        </div>
                                        <div class="skills__data">
                                            <div class="skills__titles">
                                                <h3 class="skills__name">Google Analytics</h3>
                                                <span class="skills__number">Intermediate</span>
                                            </div>
                                            <div class="skills__bar">
                                                <span class="skills__percentage"></span>
                                            </div>
                                        </div>
                                        <div class="skills__data">
                                            <div class="skills__titles">
                                                <h3 class="skills__name">Google Ads</h3>
                                                <span class="skills__number">Intermediate</span>
                                            </div>
                                            <div class="skills__bar">
                                                <span class="skills__percentage"></span>
                                            </div>
                                        </div>
                                        <div class="skills__data">
                                            <div class="skills__titles">
                                                <h3 class="skills__name">Trello</h3>
                                                <span class="skills__number">Advanced</span>
                                            </div>
                                            <div class="skills__bar">
                                                <span class="skills__percentage"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div>
                            <!--==================== SKILLS 4====================-->
                            <div class="skills__content skills__close">
                                <div class="skills__header">
                                    <i class="uil uil-server-network skills__icon"></i>

                                    <div>
                                        <h1 class="skills__title">Database</h1>
                                        <span class="skills_subtitle">More than 3 years</span>
                                    </div>
                                    <i class="uil uil-angle-down skills__arrow"></i>
                                </div>
                                <div class="skills__list grid">
                                    <div class="skills__data">
                                        <div class="skills__titles">
                                            <h3 class="skills__name">MySql</h3>
                                            <span class="skills__number">Advanced</span>
                                        </div>
                                        <div class="skills__bar">
                                            <span class="skills__percentage"></span>
                                        </div>
                                    </div>
                                    <div class="skills__data">
                                        <div class="skills__titles">
                                            <h3 class="skills__name">MongoDB</h3>
                                            <span class="skills__number">Intermediate</span>
                                        </div>
                                        <div class="skills__bar">
                                            <span class="skills__percentage"></span>
                                        </div>
                                    </div>
                                    <div class="skills__data">
                                        <div class="skills__titles">
                                            <h3 class="skills__name">SQLite</h3>
                                            <span class="skills__number">Advanced</span>
                                        </div>
                                        <div class="skills__bar">
                                            <span class="skills__percentage"></span>
                                        </div>
                                    </div>
                                    <div class="skills__data">
                                        <div class="skills__titles">
                                            <h3 class="skills__name">Firebase</h3>
                                            <span class="skills__number">Intermediate</span>
                                        </div>
                                        <div class="skills__bar">
                                            <span class="skills__percentage"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!--==================== QUALIFICATION ====================-->
            <section class="qualification section">
                <h2 class="section__title">Qualification</h2>
                <span class="section__subtitle">My personal journey</span>
                <div class="qualification__container container">
                    <div class="qualification__tabs">
                        <div class="qualification__button button--prefix qualification__active" data-target="#education">
                            <i class="uil uil-graduation-cap qualification__icon"></i> Education
                        </div>
                        <div class="qualification__button button--prefix" data-target="#work">
                            <i class="uil uil-briefcase-alt qualification__icon"></i> Work
                        </div>
                    </div>
                    <div class="qualification__sections">
                        <!--==================== QUALIFICATION CONTENT 1====================-->
                        <div class="qualification__content qualification__active" data-content id="education">
                            <!--==================== QUALIFICATION 1====================-->
                            <div class="qualification__data">
                                <div>
                                    <h3 class="qualification__title">MI Nurul Huda 2</h3>
                                    <span class="qualification__subtitle">Jl. Raya Surodinawan no. 173 Surodinawan</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i> 2006 - 2012
                                    </div>
                                </div>

                                <div>
                                    <div class="qualification__rounder"></div>
                                    <div class="qualification__line"></div>
                                </div>
                            </div>
                            <!--==================== QUALIFICATION 2====================-->
                            <div class="qualification__data">
                                <div></div>
                                <div>
                                    <div class="qualification__rounder"></div>
                                    <div class="qualification__line"></div>
                                </div>
                                <div>
                                    <h3 class="qualification__title">MTSN Mojokerto</h3>
                                    <span class="qualification__subtitle">Sambiroto, Kec. Sooko, Mojokerto</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i> 2012 - 2015
                                    </div>
                                </div>
                            </div>
                            <!--==================== QUALIFICATION 3====================-->
                            <div class="qualification__data">
                                <div>
                                    <h3 class="qualification__title">MAN 1 Kota Mojokerto</h3>
                                    <span class="qualification__subtitle">Jl. Cinde Baru VIII, Mergelo, Prajurit Kulon</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i> 2015 - 2018
                                    </div>
                                </div>

                                <div>
                                    <div class="qualification__rounder"></div>
                                    <div class="qualification__line"></div>
                                </div>
                            </div>
                            <!--==================== QUALIFICATION 3====================-->
                            <div class="qualification__data">
                                <div></div>
                                <div>
                                    <div class="qualification__rounder"></div>
                                    <!-- <div class="qualification__line"></div> -->
                                </div>
                                <div>
                                    <h3 class="qualification__title">Universitas Islam Negeri Sunan Ampel Surabaya</h3>
                                    <span class="qualification__subtitle">Surabaya</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i> 2018 - 2022
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--==================== QUALIFICATION CONTENT 2====================-->
                        <div class="qualification__content" data-content id="work">
                            <!--==================== QUALIFICATION 1====================-->
                            <div class="qualification__data">
                                <div>
                                    <h3 class="qualification__title">Web developer tutor</h3>
                                    <span class="qualification__subtitle">Mojokerto</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i> 2019
                                    </div>
                                </div>

                                <div>
                                    <div class="qualification__rounder"></div>
                                    <div class="qualification__line"></div>
                                </div>
                            </div>
                            <!--==================== QUALIFICATION 2====================-->
                            <div class="qualification__data">
                                <div></div>
                                <div>
                                    <div class="qualification__rounder"></div>
                                    <div class="qualification__line"></div>
                                </div>
                                <div>
                                    <h3 class="qualification__title">Freelance web developer</h3>
                                    <span class="qualification__subtitle">Surabaya</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i> 2020
                                    </div>
                                </div>
                            </div>
                            <!--==================== QUALIFICATION 3====================-->
                            <div class="qualification__data">
                                <div>
                                    <h3 class="qualification__title">Freenlance android developer</h3>
                                    <span class="qualification__subtitle">Mojokerto</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i> 2000
                                    </div>
                                </div>

                                <div>
                                    <div class="qualification__rounder"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== PORTFOLIO ====================-->
            <section class="portfolio section" id="portfolio">
                <h2 class="section__title">Portfolio</h2>
                <span class="section__subtitle">Most recent work</span>
                <div class="portfolio__container container swiper-container">
                    <div class="swiper-wrapper">
                        <!--==================== PORTFOLIO 1====================-->
                        <div class="portfolio__content grid swiper-slide">
                            <img src="{{ asset('assets') }}/images/portfolio1.jpg" alt="" class="portfolio__img">

                            <div class="portfolio__data">
                                <h3 class="portfolio__title">My Application</h3>
                                <p class="portfolio__description">I have a new website app, mobile app, and games every month.</p>
                                <a href="{{ url('/') }}" class="button button--flex button--small portfolio__button">
                                    View <i class="uil uil-arrow-right button__icon"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== PORTFOLIO 2====================-->
                        {{-- <div class="portfolio__content grid swiper-slide">
                            <img src="{{ asset('assets') }}/images/portfolio2.jpg" alt="" class="portfolio__img">

                            <div class="portfolio__data">
                                <h3 class="portfolio__title">Modern website</h3>
                                <p class="portfolio__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, necessitatibus, tempore possimus omnis aliquam ipsam quod, modi obcaecati ea ab deleniti quo blanditiis harum incidunt beatae ducimus excepturi reiciendis rerum!</p>
                                <a href="" class="button button--flex button--small portfolio__button">
                                    Demo <i class="uil uil-arrow-right button__icon"></i>
                                </a>
                            </div>
                        </div> --}}
                        <!--==================== PORTFOLIO 3====================-->
                        {{-- <div class="portfolio__content grid swiper-slide">
                            <img src="{{ asset('assets') }}/images/portfolio3.jpg" alt="" class="portfolio__img">

                            <div class="portfolio__data">
                                <h3 class="portfolio__title">Modern website</h3>
                                <p class="portfolio__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, necessitatibus, tempore possimus omnis aliquam ipsam quod, modi obcaecati ea ab deleniti quo blanditiis harum incidunt beatae ducimus excepturi reiciendis rerum!</p>
                                <a href="" class="button button--flex button--small portfolio__button">
                                    Demo <i class="uil uil-arrow-right button__icon"></i>
                                </a>
                            </div>
                        </div> --}}
                    </div>

                    <!-- Add Arrows -->
                    {{-- <div class="swiper-button-next">
                        <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
                    </div> --}}
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>

            </section>

            <!--==================== PROJECT IN MIND ====================-->
            <!-- <section class="project section">
                <div class="project__bg">
                    <div class="project__container container grid">
                        <div class="project__data">
                            <h2 class="project__title">You have new project</h2>
                            <p class="project__description">Contact me now and get 30% discount</p>
                            <a href="#contact" class="button button--flex button--white">
                                Contact me <i class="uil uil-message project__icon button__icon"></i>
                            </a>
                        </div>

                        <img src="{{ asset('assets') }}/images/project.png" alt="" class="project__img">
                    </div>
                </div>
            </section> -->

            <!--==================== CONTACT ME ====================-->
            <section class="contact section" id="contact">
                <h2 class="section__title">Contact me</h2>
                <span class="section__subtitle">Get in touch</span>
                <div class="contact__container container grid">
                    <div>
                        <div class="contact__information">
                            <i class="uil uil-phone contact__icon"></i>
                            <div>
                                <h3 class="contact__title">Call me</h3>
                                <span class="contact__subtitle">+6283857317946</span>
                            </div>
                        </div>
                        <div class="contact__information">
                            <i class="uil uil-envelope contact__icon"></i>
                            <div>
                                <h3 class="contact__title">Email</h3>
                                <span class="contact__subtitle">luaysyauqillah@gmail.com</span>
                            </div>
                        </div>
                        <div class="contact__information">
                            <i class="uil uil-map-marker contact__icon"></i>
                            <div>
                                <h3 class="contact__title">Location</h3>
                                <span class="contact__subtitle">Mojokerto</span>
                            </div>
                        </div>
                    </div>
                    <form action="" class="contact__form grid">
                        <div class="contact__inputs grid">
                            <div class="contact__content">
                                <label for="" class="contact__label">Name</label>
                                <input type="text" class="contact__input">
                            </div>
                            <div class="contact__content">
                                <label for="" class="contact__label">Email</label>
                                <input type="email" class="contact__input">
                            </div>
                        </div>
                        <div class="contact__content">
                            <label for="" class="contact__label">Subject</label>
                            <input type="text" class="contact__input">
                        </div>
                        <div class="contact__content">
                            <label for="" class="contact__label">Message</label>
                            <textarea name="" id="" cols="0" rows="7" class="contact__input"></textarea>
                        </div>
                        <div>
                            <a href="" class="button button--flex">
                                Send Message <i class="uil uil-message button__icon"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer">
            <div class="footer__bg">
                <div class="footer__container container grid">
                    <div>
                        <h1 class="footer__title">Muhammad Aziz Almi</h1>
                        <span class="footer__subtitle">Backend Developert</span>
                    </div>

                    <ul class="footer__links">
                        <li>
                            <a href="#about" class="footer__link">About me</a>
                        </li>
                        <li>
                            <a href="#portfolio" class="footer__link">Portfolio</a>
                        </li>
                        <li>
                            <a href="#contact" class="footer__link">Contact me</a>
                        </li>
                    </ul>

                    <div class="footer__socials">
                        <a href="" class="footer__social">
                            <i class="uil uil-facebook-f"></i>
                        </a>
                        <a href="" class="footer__social">
                            <i class="uil uil-instagram"></i>
                        </a>
                        <a href="" class="footer__social">
                            <i class="uil uil-twitter-alt"></i>
                        </a>
                    </div>
                </div>
                <p class="footer__copy">&#169; Spydercode. All right reserved</p>
            </div>
        </footer>

        <!--==================== SCROLL TOP ====================-->
        <a href="#home" class="scrollup" id="scroll-up">
            <i class="uil uil-arrow-up scrollup__icon"></i>
        </a>

        <!--==================== SWIPER JS ====================-->
        <script src="{{ asset('assets') }}/js/swiper-bundle.min.js"></script>

        <!--==================== MAIN JS ====================-->
        <script src="{{ asset('assets') }}/js/main.js"></script>
    </body>
</html>
