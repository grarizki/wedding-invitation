<?php
foreach ($detail as $item) {
    $finalDate = date_format(date_create($item->date), 'F j, Y H:i:s');
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <base href="{{ asset('/') }}">
    <!--- basic page needs
    ================================================== -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Undangan Online / Wedding Invitations" />
    <meta name="keywords" content="undangan online, wedding invitation, undangan digital" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="grarizki" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Wedding Invitations" />
    <meta property="og:site_name" content="Wedding Invitations" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    @foreach ($wedding as $item)
    <title>{{ $item->name }}</title>
    @endforeach

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="assets/undangan/css/vendor.css">
    <link rel="stylesheet" href="assets/undangan/css/styles.css">
    <link rel="stylesheet" href="assets/undangan/css/gallery-grid.css">

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="public\assets\undangan\images\icons\RC-favicon.png" />
    @livewireStyles
</head>

<body id="top" class="ss-preload theme-slides">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- intro
    ================================================== -->
    <section id="intro" class="s-intro">
        <div class="s-intro__slider">
            <div class="swiper-wrapper">
                <div class="s-intro__slide swiper-slide"></div>
            </div>
        </div>
        <div class="row s-intro__content">
            <div class="column">
                <div class="text-pretitle">
                    Syukuran pernikahan
                </div>

                <h1 class="text-huge-title">
                    {{ $item->name }}
                </h1>

                <div class="text-pretitle">
                    Kepada: <span style="text-color:white; font-weight: bold;">{{ $to }}</span>
                    <br>Dengan segala kerendahan hati, kami mengundang Bapak/Ibu/Saudara(i) dalam pernikahan kami.
                    <br>
                    <br>
                    <button href="#hidden" class="btn--stroke2 btn--small smoothscroll"
                        style="text-color:white !important;">
                        Buka Undangan
                    </button>
                    <!-- <a href="#hidden" class="btn btn--primary smoothscroll">Open Invitation</a> -->
                </div>

                <div class="s-intro__content-bottom">

                    <div class="s-intro__content-bottom-block">
                        <!-- <button id="playButton"> Pause Audio </button> -->

                        <h5>Menuju hari bahagia</h5>

                        <div class="counter">
                            <div class="counter__time">
                                <span class="ss-days">000</span>
                                <span>D</span>
                            </div>
                            <div class="counter__time">
                                <span class="ss-hours">00</span>
                                <span>H</span>
                            </div>
                            <div class="counter__time minutes">
                                <span class="ss-minutes">00</span>
                                <span>M</span>
                            </div>
                            <div class="counter__time">
                                <span class="ss-seconds">00</span>
                                <span>S</span>
                            </div>
                        </div> <!-- end counter -->

                    </div> <!-- end s-intro-content__bottom-block -->

                    <div class="s-intro__content-bottom-block">
                    </div> <!-- end s-intro-content__bottom-block -->

                </div>

                <div class="s-intro__scroll">
                    <a href="#hidden" class="smoothscroll">
                        Scroll For More
                    </a>
                </div> <!-- s-intro__scroll -->
            </div>
        </div> <!-- end s-intro__content -->

        <!-- <div class="s-intro__overlay"></div> -->

    </section> <!-- end s-intro -->


    <!-- hidden element
    ================================================== -->
    <div id="hidden" aria-hidden="true" style="opacity: 0;"></div>


    <!-- details
    ================================================== -->
    <section id="details" class="s-details">

        <div class="row">
            <div class="column">

                {{-- <p class="text-center desc-bride">We are inviting you to the wedding</p>
                <h1 class="text-center text-huge-title">
                    {{ $to }}
                </h1> --}}

                <nav class="tab-nav">
                    <ul class="tab-nav__list">
                        <li class="active" data-id="tab-couple">
                            <a href="#0">
                                <span>Tentang Kami</span>
                            </a>
                        </li>
                        <li>
                            <a href="#tab-event">
                                <span>Acara</span>
                            </a>
                        </li>
                        <li>
                            <a href="#tab-wishes">
                                <span>Ucapan & Doa</span>
                            </a>
                        </li>
                        <li>
                            <a href="#tab-gift">
                                <span>Tanda Kasih</span>
                            </a>
                        </li>
                        <li>
                            <a href="#tab-gallery">
                                <span>Galeri</span>
                            </a>
                        </li>
                    </ul>
                </nav> <!-- end tab-nav -->

                <div class="tab-content">

                    <!-- 01 - tab couple -->
                    <div id="tab-couple" class='text-center tab-content__item '>

                        <div class="row">
                            <div class="column">
                                <div class="row">
                                    @foreach ($bride as $item)
                                    <div class="column lg-6 tab-12">
                                        <p class="name-bride">{{ $item->name }}</p>

                                        <br>
                                        <img src="{{ url('/storage/') }}/{{ $item->photo }}"
                                            style="height:500px; width:auto;">
                                        <p class="desc-bride">
                                            {{ $item->child }}
                                        </p>
                                        <p>
                                            {{ $item->name_father }}
                                            dan<br>
                                            {{ $item->name_mother }}
                                        </p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div> <!-- end 01 - tab couple -->

                    <!-- 02 - tab event -->
                    <div id="tab-event" class='tab-content__item'>

                        <div class="row tab-content__item-header">
                            <div class="column">
                                <h2>Simpan tanggal ini</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="column">
                                <p class="desc">
                                    Kami sangat berharap anda dapat hadir di moment bahagia ini
                                </p>
                            </div>
                        </div>

                        <div class="row services-list block-lg-one-half block-md-one-half block-tab-whole">
                            @foreach ($detail as $item)
                            <div class="column services-list__item">
                                <div class="services-list__item-content">
                                    <h4 class="item-title">{{ $item->type }}</h4>
                                    <p class="desc-bride">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                            <path
                                                d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                            <path
                                                d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                        </svg>
                                        {{ date_format(date_create($item->date), 'd F Y') }}
                                        <br>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                            <path
                                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                        </svg>
                                        {{ date_format(date_create($item->date), 'H:i:s') }}
                                        <br>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                            <path
                                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                            <path
                                                d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                        </svg>
                                        {{ $item->address }}
                                        <br>
                                        <br>
                                        <a href="{{ $item->maps }}" class="btn btn--stroke u-fullwidth"
                                            target="_blank">Buka Peta</a>
                                        <a href="{{ $item->calendar }}" class="btn btn--stroke u-fullwidth"
                                            target="_blank">Tambahkan ke kalender</a>
                                    </p>
                                </div>
                            </div>
                            @endforeach

                        </div> <!-- end services-list -->

                    </div> <!-- end 02 - tab event -->

                    <!-- 05 - tab gift -->
                    <div id="tab-gift" class="tab-content__item">
                        <p>Tanpa mengurangi rasa hormat, bagi anda yang ingin memberikan tanda kasih untuk mempelai
                            dapat melalui: </p>

                        <div class="row">
                            <div class="column">
                                <div class="row">
                                    @foreach ($gift as $item)
                                    <div class="column lg-6 tab-12">
                                        <h4>Alamat</h4>
                                        <p class="desc">
                                            {{ $item->address }}
                                            <br>
                                            @if (!$item->note)
                                            @else
                                            Patokan : {{ $item->note }}
                                            @endif
                                            <a href="{{ $item->maps }}"
                                                target="_blank">{{ $item->maps }}</a>
                                        </p>

                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>

                        <button id="toggleBankInfo" class="btn btn-primary">
                            Tampilkan Nomor Rekening
                        </button>
                        <div id="bankInfo" style="display: none;">
                            <div class="row">
                                @foreach ($bank as $item)
                                <div class="column lg-6 tab-12">
                                    <h4>{{ $item->name }}</h4>
                                    <img src="{{ url('/storage/') }}/{{ $item->logo }}"
                                        style="height:30px; width:auto;">
                                    <p class="desc">
                                        {{ $item->acc_number }}
                                        <br>a/n {{ $item->acc_name }}
                                    </p>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div> <!-- end 05 - tab gift -->

                    <!-- 04 - tab wishes -->
                    <div id="tab-wishes" class="tab-content__item">
                        @foreach ($thank as $item)
                        <p>{{ $item->note }}</p>
                        @endforeach
                        <br>

                        <div class="row">

                            <div class="column lg-6 tab-12">
                                <livewire:create-wish>
                            </div>

                            <div class="column lg-6 tab-12" style=" height: 500px; overflow: auto;">
                                <p><b>Ucapan & Doa</p></b>
                                <livewire:list-wish>
                            </div>

                        </div>

                    </div> <!-- end 04 - tab wishes -->

                    <!-- 03 - tab gallery -->
                    @foreach ($galery as $item)
                    <div id="tab-gallery" class="tab-content__item">
                        <div class="tz-gallery">

                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <a class="lightbox" href="{{ url('/storage/') }}/{{ $item->gallery1 }}">
                                        <img src="{{ url('/storage/') }}/{{ $item->gallery1 }}">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <a class="lightbox" href="{{ url('/storage/') }}/{{ $item->gallery2 }}">
                                        <img src="{{ url('/storage/') }}/{{ $item->gallery2 }}">
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                    <!-- end 03 - tab gallery -->

                </div> <!-- end tab content -->

                <!-- footer  -->
                <footer>
                    <div class="ss-copyright">
                        @foreach ($wedding as $item)
                        <span>© Copyright {{ $item->name }} {{ date('Y') }}</span>
                        @endforeach
                    </div>
                </footer>

            </div>
        </div>

        <div class="ss-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top">
                <span>Back to Top</span>
                <svg viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" width="26"
                    height="26">
                    <path
                        d="M7.5 1.5l.354-.354L7.5.793l-.354.353.354.354zm-.354.354l4 4 .708-.708-4-4-.708.708zm0-.708l-4 4 .708.708 4-4-.708-.708zM7 1.5V14h1V1.5H7z"
                        fill="currentColor"></path>
                </svg>
            </a>
        </div> <!-- end ss-go-top -->

    </section> <!-- end s-details -->

    <audio id="audio" autoplay loop>
        <source src="assets/undangan/Lover - TAYLOR SWIFT.mp3" type="audio/mpeg">
    </audio>


    <!-- Java Script
    ================================================== -->
    <script src="assets/undangan/js/plugins.js"></script>
    <script src="assets/undangan/js/main.js"></script>
    <Script>
        (function(html) {

            'use strict';

            html.className = html.className.replace(/\bno-js\b/g, '') + 'js';

            const cfg = {

                // Countdown Timer Final Date
                finalDate: '<?php echo $finalDate; ?>',
                // MailChimp URL
                mailChimpURL: 'https://facebook.us1.list-manage.com/subscribe/post?u=1abf75f6981256963a47d197a&amp;id=37c6d8f4d6'

            };

            /* Countdown Timer
             * ------------------------------------------------------ */
            const ssCountdown = function() {

                const finalDate = new Date(cfg.finalDate).getTime();
                const daysSpan = document.querySelector('.counter .ss-days');
                const hoursSpan = document.querySelector('.counter .ss-hours');
                const minutesSpan = document.querySelector('.counter .ss-minutes');
                const secondsSpan = document.querySelector('.counter .ss-seconds');
                let timeInterval;

                if (!(daysSpan && hoursSpan && minutesSpan && secondsSpan)) return;

                function timer() {

                    const now = new Date().getTime();
                    let diff = finalDate - now;

                    if (diff <= 0) {
                        if (timeInterval) {
                            clearInterval(timeInterval);
                        }
                        return;
                    }

                    let days = Math.floor(diff / (1000 * 60 * 60 * 24));
                    let hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
                    let minutes = Math.floor((diff / 1000 / 60) % 60);
                    let seconds = Math.floor((diff / 1000) % 60);

                    if (days <= 99) {
                        if (days <= 9) {
                            days = '00' + days;
                        } else {
                            days = '0' + days;
                        }
                    }

                    hours <= 9 ? hours = '0' + hours : hours;
                    minutes <= 9 ? minutes = '0' + minutes : minutes;
                    seconds <= 9 ? seconds = '0' + seconds : seconds;

                    daysSpan.textContent = days;
                    hoursSpan.textContent = hours;
                    minutesSpan.textContent = minutes;
                    secondsSpan.textContent = seconds;

                }

                timer();
                timeInterval = setInterval(timer, 1000);
            };

            /* Initialize
             * ------------------------------------------------------ */
            (function ssInit() {
                ssCountdown();

            })();

        })(document.documentElement);
    </Script>
    <script>
        document.getElementById("toggleBankInfo").addEventListener("click", function() {
            var bankInfo = document.getElementById("bankInfo");
            if (bankInfo.style.display === "none") {
                bankInfo.style.display = "block";
                this.textContent = "Sembunyikan Nomor Rekening";
            } else {
                bankInfo.style.display = "none";
                this.textContent = "Tampilkan Nomor Rekening";
            }
        });
    </script>
    <script>
        // Get the audio element
        const audio = document.getElementById("audio");

        // Get the button element
        const playButton = document.getElementById("playButton");

        // Automatically play audio when the page loads
        window.addEventListener("load", () => {
            audio.play().catch((error) => {
                console.log("Autoplay blocked:", error);
            });
        });

        // Add an event listener to toggle play/pause
        playButton.addEventListener("click", () => {
            if (audio.paused) {
                audio.play(); // Play if paused
                playButton.textContent = "Paused Audio"; // Update button text
            } else {
                audio.pause(); // Pause if playing
                playButton.textContent = "Play Audio"; // Update button text
            }
        });
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>

    @livewireScripts
</body>

</html>