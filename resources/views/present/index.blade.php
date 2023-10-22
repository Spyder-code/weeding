<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Primary Meta Tags -->
    <title>Aziz Almi & Nur Isnaini</title>
    <meta name="title" content="Aziz Almi & Nur Isnaini" />
    <meta name="description" content="Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila, Bapak / Ibu / Saudara / i. berkenan hadir untuk memberikan do'a restunya kami ucapkan terimakasih." />

    <!-- Open Graph / Facebook -->
    <meta property="og:site_name" content="Weeding Invitation">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://mediku.id/A-N/example" />
    <meta property="og:title" content="Aziz Almi & Nur Isnaini" />
    <meta property="og:description" content="Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila, Bapak / Ibu / Saudara / i. berkenan hadir untuk memberikan do'a restunya kami ucapkan terimakasih." />
    <meta property="og:image" content="{{ asset('images/thumb.jpg') }}" />
	<meta property="og:image:width" content="800" />
	<meta property="og:image:height" content="532" />
	<meta property="og:image:type" content="image/jpg" />
    <meta property="og:image:secure_url" content="{{ asset('images/thumb.jpg') }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://mediku.id/A-N/example" />
    <meta property="twitter:title" content="Aziz Almi & Nur Isnaini" />
    <meta property="twitter:description" content="Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila, Bapak / Ibu / Saudara / i. berkenan hadir untuk memberikan do'a restunya kami ucapkan terimakasih." />
    <meta property="twitter:image" content="{{ asset('images/thumb.jpg') }}" />

    <!-- Meta Tags Generated with https://metatags.io -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('style.css') }}?{{ date('his') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/an.jpg') }}">
    @livewireStyles
</head>
<body>
    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-touch="false" data-bs-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item">
                <main class="text-center one" style="background-image: url('{{ asset('images/image-1.jpeg') }}');">
                    <canvas id="snow-canvas"></canvas>
                    <div class="audio" style="position: absolute; top:10px; right:10px; color:#f4e2be">
                        <button style="border-radius:10px; border: #f4e2be 1px solid; background:transparent; padding:10px;color:#f4e2be; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" type="button" onclick="audioControl()"><i class="fas fa-music"></i></button>
                    </div>
                    <div class="header d-flex justify-content-between gap-5">
                        <div class="divider avander ls"><span>Muhammad Aziz Almi</span></div>
                        <div>
                            <img src="{{ asset('images/an.png') }}" class="logo img-fluid">
                        </div>
                        <div class="divider avander ls"><span>Nur Isnaini</span></div>
                    </div>
                    <div class="banner">
                        <img src="#" class="welcome" alt="Vite Logo" style="opacity: 0%;"/>
                        <h3 class="text-theme">Hello, We Are Getting Married</h3>
                        <h2 class="text-theme">- Save The Date -</h2>
                    </div>
                    <div class="navigation-left d-flex flex-column gap-2">
                        <a href="{{ $weeding->reception_maps }}" target="d_blank" class="box d-flex justify-content-center"><i class="fa-solid fa-location-dot"></i></a>
                        <div class="box d-flex justify-content-center" data-bs-target="#carouselExampleControls" data-bs-slide-to="1"><i class="fa-solid fa-calendar-days"></i></div>
                        <div class="box d-flex justify-content-center" data-bs-target="#carouselExampleControls" data-bs-slide-to="2"><i class="fa-solid fa-envelope"></i></div>
                    </div>
                    <div class="navigation-right d-flex flex-column gap-2">
                        <div class="box flex-column border-0 text-theme" data-bs-target="#carouselExampleControls" data-bs-slide-to="1"><i class="fas fa-arrow-right"></i>Next</div>
                    </div>
                    <div class="footer">
                        <table class="desktop" style=" font-size: 1.3rem; font-weight:bold">
                            <tr style="border-top: #f4e2be 1px solid;">
                                <td colspan="3" style="height: 10px"></td>
                            </tr>
                            <tr>
                                <td class="avander ls" style="width: 200px"><span class="day">0</span> <br> Days</td>
                                <td class="avander ls" style="border-right: #f4e2be 1px solid; width: 200px"><span class="hour">0</span> <br> Hours</td>
                                <td class="avander ls" rowspan="2" style="letter-spacing: 6px; width:300px"><b>SAVE THE DATE</b> <br> <b>{{ date('d.m.y',strtotime($weeding->reception_date)) }}</b></td>
                            </tr>
                            <tr>
                                <td class="avander ls" style="width: 200px"><span class="minute">0</span> <br> Minutes</td>
                                <td class="avander ls" style="border-right: #f4e2be 1px solid; width:200px"><span class="second">0</span> <br> Seconds</td>
                            </tr>
                            <tr style="border-bottom: #f4e2be 1px solid;">
                                <td class="avander ls" colspan="3" style="height: 10px"></td>
                            </tr>
                        </table>
                        <table class="mobile" style=" font-size: .9rem; font-weight:bold">
                            <tr style="border-top: #f4e2be 1px solid;">
                                <td colspan="2" style="height: 10px"></td>
                            </tr>
                            <tr>
                                <td class="avander ls" style="border-right: #f4e2be 1px solid;">SAVE THE DATE </td>
                                <td class="avander ls" style="letter-spacing: 6px; font-size:1rem !important; width:150px"><b>{{ date('d.m.y',strtotime($weeding->reception_date)) }}</b></td>
                            </tr>
                            <tr style="border-bottom: #f4e2be 1px solid;">
                                <td class="avander ls" colspan="2" style="height: 10px"></td>
                            </tr>
                        </table>
                        <div class="d-flex justify-content-between">
                            <table class="mobile time w-100 mt-1" style=" font-size: .9rem; font-weight:bold">
                                <tr style="border-top: #f4e2be 1px solid;">
                                    <td style="height: 10px" style="width: 300px"></td>
                                </tr>
                                <tr>
                                    <td class="avander ls text-center" style="width: 310px"><span class="day">0</span>D <span class="hour">0</span>H <span class="minute"></span>M <span class="second"></span>S</td>
                                </tr>
                                <tr style="border-bottom: #f4e2be 1px solid;">
                                    <td style="height: 10px"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </main>
            </div>
            <div class="carousel-item">
                <main class="text-center two" style="background-image: url('{{ asset('images/image-2.jpeg') }}');">
                    <canvas id="snow-canvas1"></canvas>
                    <div class="d-flex justify-content-center text-center" style="opacity: .7">
                        <div class="img-top" style="background-image:url('{{ asset('images/image-2.jpeg') }}'); transform: scaleX(-1);"></div>
                    </div>
                    <div class=" position-absolute mx-auto" style="top: 10px; left:0;right:0">
                        <table class="avander table w-100 fw-bold" style="color: #f4e2be; letter-spacing:2px">
                            <tr>
                                <td style="width: 200px">Aziz Almi</td>
                                <td rowspan="2"><img src="{{ asset('images/an.png') }}" class="logo img-fluid"></td>
                                <td style="width: 200px">Nur Isnaini</td>
                            </tr>
                            <tr>
                                <td>H. Mulyono (Alm) <br> & Hj. Siamah</td>
                                <td>H. Sukadi (Alm) <br> & Hj. Sutilah</td>
                            </tr>
                        </table>
                    </div>
                    <div class="navigation-left d-flex flex-column gap-2" style="top: 50% !important">
                        <div class="box flex-column border-0 text-theme" data-bs-target="#carouselExampleControls" data-bs-slide-to="0"><i class="fas fa-arrow-left"></i>Prev</div>
                    </div>
                    <div class="navigation-right d-flex flex-column gap-2" style="top: 50% !important">
                        <div class="box flex-column border-0 text-theme" data-bs-target="#carouselExampleControls" data-bs-slide-to="2"><i class="fas fa-arrow-right"></i>Next</div>
                    </div>
                    <div class="footer" style="position: absolute; bottom:20px; left:0; right:0; margin-left:auto; margin-right: auto">
                        <div class="row">
                            <div class="col-6">
                                <table class="desktop w-100" style=" font-size: 1.3rem">
                                    <tr style="border-top: #f4e2be 1px solid;">
                                        <td colspan="2" style="height: 10px"></td>
                                    </tr>
                                    <tr>
                                        <td class="avander" style="width: 400px; border-right: #f4e2be 1px solid;">04 November 2023 <br> 09.00 - Selesai</td>
                                        <td class="avander" style="letter-spacing: 6px; width:300px">AKAD NIKAH</td>
                                    </tr>
                                    <tr style="border-bottom: #f4e2be 1px solid;">
                                        <td class="avander" colspan="2" style="height: 10px"></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-6">
                                <table class="desktop w-100" style=" font-size: 1.3rem">
                                    <tr style="border-top: #f4e2be 1px solid;">
                                        <td colspan="2" style="height: 10px"></td>
                                    </tr>
                                    <tr>
                                        <td class="avander" style="letter-spacing: 6px; width:300px">RESEPSI</td>
                                        <td class="avander" style="width: 400px; border-right: #f4e2be 1px solid;">{{ date('d F y',strtotime($weeding->reception_date)) }} <br> 12.00 - Selesai</td>
                                    </tr>
                                    <tr style="border-bottom: #f4e2be 1px solid;">
                                        <td class="avander" colspan="2" style="height: 10px"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="text-center my-3 d-none d-lg-block">
                            <p class="text-center ls">{{ $weeding->reception_address }}</p>
                            <hr>
                        </div>
                        <table class="mobile" style=" font-size: .9rem">
                            <tr style="border-top: #f4e2be 1px solid;">
                                <td colspan="2" style="height: 10px"></td>
                            </tr>
                            <tr>
                                <td class="avander ls" style="border-right: #f4e2be 1px solid;"><b>RESEPSI</b></td>
                                <td class="avander ls" style="letter-spacing: 6px; font-size:1rem !important; width:150px"><b>{{ date('d.m.y',strtotime($weeding->reception_date)) }}</b></td>
                            </tr>
                            <tr style="border-bottom: #f4e2be 1px solid;">
                                <td class="avander ls" colspan="2" style="height: 10px"></td>
                            </tr>
                        </table>
                        <div class="d-flex justify-content-between">
                            <table class="mobile time w-100 mt-1" style=" font-size: .9rem;">
                                <tr style="border-top: #f4e2be 1px solid;">
                                    <td style="height: 10px" style="width: 300px"></td>
                                </tr>
                                <tr>
                                    <td class="avander ls text-center" style="width: 310px"><b>12.00 - Selesai</b></td>
                                </tr>
                                <tr style="border-bottom: #f4e2be 1px solid;">
                                    <td style="height: 10px"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="row d-block d-lg-none">
                            <marquee class="avander py-2" style="color: #f4e2be; border-top:#f4e2be 1px solid; border-bottom:#f4e2be 1px solid; letter-spacing: 3px"><b>{{ $weeding->reception_address }}</b></marquee>
                        </div>
                    </div>
                </main>
            </div>
            <div class="carousel-item">
                <main class="text-center three" style="background-image: url('{{ asset('images/banner-1.jpeg') }}');">
                    <canvas id="snow-canvas2"></canvas>
                    {{-- <div class="d-flex justify-content-center text-center" style="opacity: .7">
                        <div class="img-top" style="background-image:url('{{ asset('images/image-2.jpeg') }}')"></div>
                    </div> --}}
                    <div class="container-fluid" style="position: relative">
                        <div class="navigation-left d-flex flex-column gap-2 d-none d-md-block" style="top: 40%">
                            <div class="box d-flex justify-content-center" data-bs-target="#carouselExampleControls" data-bs-slide-to="0"><i class="fa-solid fa-home"></i></div>
                            <a href="{{ $weeding->reception_maps }}" target="d_blank" class="box d-flex justify-content-center"><i class="fa-solid fa-location-dot"></i></a>
                            <div class="box d-flex justify-content-center" data-bs-target="#carouselExampleControls" data-bs-slide-to="1"><i class="fa-solid fa-calendar-days"></i></div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center my-lg-5 my-3">
                                    <h3 class="text-theme ucapan">Ucapan & Doa</h3>
                                </div>
                                <div style="width: 400px">
                                </div>
                            </div>
                            <marquee class="avander py-2" style="color: #f4e2be; border-top:#f4e2be 1px solid; border-bottom:#f4e2be 1px solid; letter-spacing: 3px"><b>Merupakan suatu kehormatan dan kebahagiaan bagi kami atas do'a restunya kami ucapkan terimakasih.</b></marquee>
                            <div class="col-12 col-md-6"></div>
                            <div class="col-12 col-md-6">
                                <livewire:message-invitation :code="$code" :name="$name"/>
                            </div>
                        </div>
                    </div>
                    <div class="footer d-none d-md-block">
                        <table class="mobiles" style=" font-size: .9rem">
                            <tr style="border-top: #f4e2be 1px solid;">
                                <td colspan="3" style="height: 10px"></td>
                            </tr>
                            <tr>
                                <td class="avander ls" style="width:200px; border-right: #f4e2be 1px solid;"><b>SAVE THE DATE</b></td>
                                <td class="avander ls" style="letter-spacing: 6px; font-size:1rem !important; width:170px; border-right: #f4e2be 1px solid"><b>{{ date('d.m.y',strtotime($weeding->reception_date)) }}</b></td>
                                <td class="avander ls" style="letter-spacing: 6px; font-size:1rem !important; width:250px"><b>12:00 - Selesai</b></td>
                            </tr>
                            <tr style="border-bottom: #f4e2be 1px solid;">
                                <td class="avander ls" colspan="3" style="height: 10px"></td>
                            </tr>
                        </table>
                    </div>
                    <div style="position: absolute; bottom:20px; padding:5px; width:100%; gap:10px" class="d-flex justify-content-center d-block d-md-none">
                        <div class="box px-5 py-3 d-flex justify-content-center" data-bs-target="#carouselExampleControls" data-bs-slide-to="0"><i class="fa-solid fa-home"></i></div>
                        <a href="{{ $weeding->reception_maps }}" target="d_blank" class="box px-5 py-3 d-flex justify-content-center"><i class="fa-solid fa-location-dot"></i></a>
                        <div class="box px-5 py-3 d-flex justify-content-center" data-bs-target="#carouselExampleControls" data-bs-slide-to="1"><i class="fa-solid fa-calendar-days"></i></div>
                        {{-- <div class="box text-theme py-1 d-none d-md-block" style="color: #f4e2be; width:400px">Tulis Ucapan</div> --}}
                    </div>
                </main>
            </div>
            <div class="carousel-item active">
                <canvas id="snow-canvas3"></canvas>
                <main class="text-center two" style="background-image: url('{{ asset('images/image-4.jpeg') }}');">
                    <div class="d-flex justify-content-center text-center" style="opacity: .7">
                        <div class="img-top" style="background-image:url('{{ asset('images/image-4.jpeg') }}')"></div>
                    </div>
                    <div class="text-center d-flex justify-content-center">
                        <div class="header d-flex justify-content-between gap-5">
                            <div class="divider avander ls"><span>Aziz Almi</span></div>
                            <div>
                                <img src="{{ asset('images/an.png') }}" class="logo img-fluid">
                            </div>
                            <div class="divider avander ls"><span>Nur Isnaini</span></div>
                        </div>
                    </div>
                    <div class="footer" style="position: absolute; bottom:75px; left:0; right:0; margin-left:auto; margin-right: auto">
                        <div class="d-flex justify-content-between">
                            <table class="mobiles time w-100 mt-1" style=" font-size: .9rem;">
                                <tr>
                                    <td class="avander" style="font-size:1.5rem"><b>{{ strtoupper($name) }}</b></td>
                                </tr>
                                <tr>
                                    <td style="height: 10px"></td>
                                </tr>
                            </table>
                        </div>
                        <table class="mobiles" style=" font-size: .9rem">
                            <tr style="border-top: #f4e2be 1px solid;">
                                <td style="height: 10px"></td>
                            </tr>
                            <tr>
                                <td class="avander ls" style="letter-spacing: 6px; font-size:1.5rem !important; width:150px"><b>{{ date('d.m.y',strtotime($weeding->reception_date)) }}</b></td>
                            </tr>
                            <tr>
                                <td class="avander ls" style="height: 10px"></td>
                            </tr>
                        </table>
                        <div class="d-flex justify-content-between">
                            <div class="avander ls box px-5 py-3 w-100" style="color: #f4e2be;font-size:1.5rem" onclick="playAudio()" data-bs-target="#carouselExampleControls" data-bs-slide-to="0"><b>Buka Undangan</b></div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <audio src="{{ asset('bg1.mpeg') }}" id="audio"></audio>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script>
        let canvas;
        let canvas1;
        let canvas2;
        let canvas3;
        let ctx;
        let ctx1;
        let ctx2;
        let ctx3;
        let snowflakes = [];
        let width = screen.width;
        let count = 10
        if(width>700){
            count = 50;
        }else if(width >= 500 && width <=700){
            count = 20;
        }else{
            count = 10;
        }
        canvas = document.getElementById('snow-canvas');
        canvas1 = document.getElementById('snow-canvas1');
        canvas2 = document.getElementById('snow-canvas2');
        canvas3 = document.getElementById('snow-canvas3');
        ctx = canvas.getContext('2d');
        ctx1 = canvas1.getContext('2d');
        ctx2 = canvas2.getContext('2d');
        ctx3 = canvas3.getContext('2d');

        // Set canvas size
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        canvas1.width = window.innerWidth;
        canvas1.height = window.innerHeight;
        canvas2.width = window.innerWidth;
        canvas2.height = window.innerHeight;
        canvas3.width = window.innerWidth;
        canvas3.height = window.innerHeight;

        // Create snowflakes
        for (let i = 0; i < count; i++) {
        snowflakes.push({
            x: Math.random() * canvas.width,
            y: Math.random() * canvas.height,
            speed: .5,
        });
        }

        // Update snowflakes position
        const updateSnowflakes = () => {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx1.clearRect(0, 0, canvas1.width, canvas1.height);
            ctx2.clearRect(0, 0, canvas2.width, canvas2.height);
            ctx3.clearRect(0, 0, canvas3.width, canvas3.height);

            snowflakes.forEach(flake => {
                flake.y += flake.speed;

                // Wrap around when reaching the bottom
                if (flake.y > canvas.height) {
                    flake.y = 0;
                }
                if (flake.y > canvas1.height) {
                    flake.y = 0;
                }

                ctx.fillStyle = '#f4e2be';
                ctx.font = '20px Arial';
                ctx.globalAlpha = flake.y / 100;
                ctx.fillText('☘', flake.x, flake.y);
                ctx1.fillStyle = '#f4e2be';
                ctx1.font = '20px Arial';
                ctx1.globalAlpha = flake.y / 100;
                ctx1.fillText('☘', flake.x, flake.y);
                ctx2.fillStyle = '#f4e2be';
                ctx2.font = '20px Arial';
                ctx2.globalAlpha = flake.y / 100;
                ctx2.fillText('☘', flake.x, flake.y);
                ctx3.fillStyle = '#f4e2be';
                ctx3.font = '20px Arial';
                ctx3.globalAlpha = flake.y / 100;
                ctx3.fillText('☘', flake.x, flake.y);
            });
        };

        // Repeat the update at a regular interval
        const interval = setInterval(updateSnowflakes, 30);

        (function titleScroller(text) {
            document.title = text;
            setTimeout(function () {
                titleScroller(text.substr(1) + text.substr(0, 1));
            }, 500);
        }(" Aziz & Nur Isnaini "));

        var x = document.getElementById("audio");

        let is_play = false;
        function playAudio() {
            x.play();
            is_play = true;
        }

        function pauseAudio() {
            x.pause();
            is_play = false;
        }

        function audioControl()
        {
            if(is_play){
                pauseAudio();
            }else{
                playAudio();
            }
        }

        let date = @json(date('Y-m-d',strtotime($weeding->reception_date)));
        const countdownDate = new Date(date).getTime();

        // Update the countdown every 1 second
        const countdownInterval = setInterval(function() {

            // Get the current date and time
            const now = new Date().getTime();

            // Calculate the time remaining
            const timeRemaining = countdownDate - now;

            // Calculate days, hours, minutes, and seconds
            const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

            $('.day').html(days);
            $('.hour').html(hours);
            $('.minute').html(minutes);
            $('.second').html(seconds);
            if (timeRemaining < 0) {
                clearInterval(countdownInterval);
                $('.day').html(0);
                $('.hour').html(0);
                $('.minute').html(0);
                $('.second').html(0);
            }
        }, 1000);
    </script>
    @livewireScripts
</body>
</html>
