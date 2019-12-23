<!DOCTYPE html>
<!-- 
Temanggung Gandem Template
http://www.templatemo.com/preview/templatemo_426_Temanggung Gandem
-->

<head>
    <title>Temanggung Gandem</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Style Sheets -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo_misc.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('modal/modal.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.theme.default.min.css') }}">

    <!-- JavaScripts -->
    <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-dropdown.js') }}"></script>
    <script src="{{ asset('js/bootstrap-collapse.js') }}"></script>
    <script src="{{ asset('js/bootstrap-tab.js') }}"></script>
    <script src="{{ asset('js/jquery.singlePageNav.js') }}"></script>
    <script src="{{ asset('js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/jquery.lightbox.js') }}"></script>
    <script src="{{ asset('js/templatemo_custom.js') }}"></script>
    <script src="{{ asset('js/responsiveCarousel.min.js') }}"></script>
    {{-- <script src="{{ asset('modal/modal.js') }}"></script> --}}
    <script src="{{ asset('owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <style>
        .myIframe {
            position: relative;
            padding-bottom: 65.25%;
            padding-top: 30px;
            height: 0;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
            border: solid black 1px;
        }

        .myIframe iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        #close {
            float: right;
            display: inline-block;
            padding: 2px 5px;
            background: #ccc;
        }

        .d-none {
            display: none;
        }

        .example_e:hover {
            color: #fd704e !important;
            font-weight: 700 !important;
            letter-spacing: 3px;
            background: none;
            -webkit-box-shadow: 0px 5px 40px -10px rgba(0, 0, 0, 0.57);
            -moz-box-shadow: 0px 5px 40px -10px rgba(0, 0, 0, 0.57);
            transition: all 0.5s ease 0s;
        }

        .example_e {
            font-size: 12px;
            margin: 3px;

            border: none;
            background: #d6935b;
            color: #ffffff !important;
            font-weight: 100;
            padding: 12px;
            text-transform: uppercase;
            border-radius: 6px;
            display: inline-block;
            transition: all 0.5s ease 0s;
        }
    </style>
    <style>
        div.paddingbot:hover {
            opacity: 0.5;
            cursor: pointer;
        }

        .bisa-klik:hover {
            opacity: 0.5;
            cursor: pointer;
        }
    </style>
    <style>
        .loader {
            border: 10px solid #f3f3f3;
            border-radius: 50%;
            border-top: 10px solid #3498db;
            width: 40px;
            height: 40px;
            -webkit-animation: spin 2s linear infinite;
            /* Safari */
            animation: spin 1s linear infinite;
        }

        /* Safari */
        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    <style>
        .center {
            margin: auto;

        }
    </style>
    <style>
        div.gallery-item {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 190px;
        }

        div.pelayanan {
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        div.pelayanan:hover {
            border: 2px solid #ff8303;
            border-radius: 10px;
        }

        div.gallery-item:hover {
            border: 1px solid #777;
        }

        div.gallery-item img {
            max-width: 300px;
            max-height: 200px;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

        div.button {
            display: inline-block;
            color: white;
            border: 1px solid #ff8303;
            background: #ff8303;
            box-shadow: 0 0 5px -1px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            vertical-align: middle;
            width: 50px;
            height: 25px;
            margin: 5px;
            padding: 5px;
            text-align: center;
        }

        img.plynan {
            max-width: 37%;
            height: auto;
            float: left;
        }

        div.title {
            margin: 5px;
        }

        img.yutub {
            max-width: 9%;
            height: auto;
            float: left;
        }

        @media screen and (max-width: 600px) {
            img.yutub {
                max-width: 40%;
                height: auto;
            }

            div.pelayanan {
                border: 1px solid #ccc;
                border-radius: 10px;
                padding: 5px;
            }

            div.pelayanan:hover {
                border: 2px solid #ff8303;
                border-radius: 10px;
            }

            img.plynan {
                max-width: 100%;
                max-height: auto;
            }

            div.gallery-item {
                margin: 5px;
                border: 1px solid #ccc;
                float: left;
                width: 150px;
            }

            div.gallery-item img {
                max-width: 110px;
                max-height: 50px;
            }

            div.title {
                margin: 5px;
            }
        }
    </style>
</head>

<body>

    <main class="py-4">
        @yield('content')
    </main>

    <!-- footer start -->
    <div class="templatemo_footerwrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">Copyright &copy; 2019 <a href="#">Temanggung Smart City</a>
                    <!-- | Design: <a href="http://www.templatemo.com">templatemo</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- footer end -->
    <script>
        // <!-- scroll to specific id when click on menu -->
        // Cache selectors
        var lastId,
            topMenu = $("#top-menu"),
            topMenuHeight = topMenu.outerHeight() + 15,
            // All list items
            menuItems = topMenu.find("a"),
            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function() {
                var item = $($(this).attr("href"));
                if (item.length) {
                    return item;
                }
            });
        // Bind click handler to menu items
        // so we can get a fancy scroll animation
        menuItems.click(function(e) {
            var href = $(this).attr("href"),
                offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 1;
            $('html, body').stop().animate({
                scrollTop: offsetTop
            }, 300);
            e.preventDefault();
        });
        // Bind to scroll
        $(window).scroll(function() {
            // Get container scroll position
            var fromTop = $(this).scrollTop() + topMenuHeight;
            // Get id of current scroll item
            var cur = scrollItems.map(function() {
                if ($(this).offset().top < fromTop)
                    return this;
            });
            // Get the id of the current element
            cur = cur[cur.length - 1];
            var id = cur && cur.length ? cur[0].id : "";
            if (lastId !== id) {
                lastId = id;
                // Set/remove active class
                menuItems
                    .parent().removeClass("active")
                    .end().filter("[href=#" + id + "]").parent().addClass("active");
            }
        });
    </script>

    <script>
        function remove_load() {
            var load = document.getElementById('loader');


            load.classList.add("d-none");

        }

        function data_menu($id) {
            var load = document.getElementById('loader');

            var id = $id;
            var _token = $('input[name="_token"]').val();
            // alert(id);

            $.ajax({
                url: "{{ route('menu.fetch') }}",
                method: "POST",
                data: {
                    _token: _token,
                    id: id
                },
                success: function(data) {
                    // console.log(data);
                    $('.menu-data').html(data);

                }
            });

            load.classList.remove('d-none');
            setTimeout(remove_load, 280);

        }

        function data_detail_menu($id) {
            var load = document.getElementById('loader');

            var id = $id;
            var _token = $('input[name="_token"]').val();
            // alert(id);

            $.ajax({
                url: "{{ route('detailmenu.fetch') }}",
                method: "POST",
                data: {
                    _token: _token,
                    id: id
                },
                success: function(data) {
                    $('.detail_menu').html(data);
                    $("#gone").remove();
                }
            });

            setTimeout(remove_load, 280);
        }

        function data_content($id) {
            var load = document.getElementById('loader');

            var id = $id;
            var _token = $('input[name="_token"]').val();
            // console.log(id);
            // alert(id);

            $.ajax({
                url: "{{ route('content.fetch') }}",
                method: "POST",
                data: {
                    _token: _token,
                    id: id
                },
                success: function(data) {

                    var json = JSON.parse(data);
                    Swal.fire({
                        title: '<span style="font-size:20px">' + json['result'].name + '<span>',
                        html: '<span style="font-size:17px">' + json['result'].description + '<span>' + '<p> <a href="https://maps.google.com/?q=@' + json['result'].lat + ',' + json['result'].lng + '" target="_blank" >Klik Untuk Buka Maps</a> </p>',
                        imageUrl: 'http://temanggung.mcity.id/files/content/' + json['result'].images,
                        imageWidth: 400,
                        imageHeight: 300,
                        imageAlt: 'Custom image',
                        width: '650px',
                        customClass: {
                            html: 'swal-text',
                        }
                    })

                    $("#gone ").remove();
                    // console.log(data);
                }
            });
            setTimeout(remove_load, 280);
        }

        function harga_pokok() {
            var date_start = '23-12-2019';
            var date_start_submit = '23-12-2019';
            var date_end = '23-12-2019';
            var date_end_submit = '23-12-2019';
            var in_kabupaten = '23';
            var in_pasar = '87';
            var _token = $('input[name="_token"]').val();

            $.ajax({
                url: "{{ route('harga.fetch') }}",
                method: "POST",
                data: {
                    date_start: date_start,
                    date_start_submit: date_start_submit,
                    date_end: date_end,
                    date_end_submit: date_end_submit,
                    in_kabupaten: in_kabupaten,
                    in_pasar: in_pasar,
                    _token: _token
                },
                success: function(data) {
                    Swal.fire({
                        title: '<span style="font-size:20px">Harga Pokok<span>',
                        html: data,
                        width: '650px',
                        customClass: {
                            html: 'swal-text',
                        }
                    })
                }
            });
        }

        function agenda() {
            Swal.fire({
                // title: 'Agenda Temanggung',
                html: '<div class="myIframe">' + '<iframe src="/agenda">' + '</iframe>' + '</div>',
                width: '1000px',
                customClass: {
                    html: 'swal-text',
                }
            });
        }

        function tv() {
            Swal.fire({
                title: 'Temanggung TV',
                html: '<div class="myIframe">' + '<iframe src="/tv-temanggung">' + '</iframe>' + '</div>',
                width: '1000px',
                customClass: {
                    html: 'swal-text',
                }
            });
        }

        function pelayanan() {
            Swal.fire({
                title: '<h2>Pelayanan Publik</h2>',
                html: '<div class="row" style="margin: 5px;"><div class="row title"><h4 style="float:left">Berita Temanggung</h4></div><div class="row" style="margin:5px;"><div class="col-md-12 pelayanan"><a target="_blank" href="http://mediacenter.temanggungkab.go.id/"> <div class="col-sm-9"><img class="plynan" src="https://mediacenter.temanggungkab.go.id/asset/logo/Untitled-6.png"></a></div><div class="col-sm-1"><h6>.</h6></div></div></div><div class="row" style="margin:5px;"><div class="col-md-12 pelayanan"><div class="col-sm-1"><a target="_blank" href="http://hebat.temanggungkab.go.id/"><img src="http://hebat.temanggungkab.go.id/assets/logo_kabupaten_temanggung-7d33861835241016b515cdb6643492051fc70d5bf8169be38cd35e04dc6378ad.png"></div><div class="col-sm-9" style="text-align: center;"><div class="row"><span style="font-size:20px; float:left; display: inline-block; vertical-align: middle;">HIMPUNAN BERITA TEMANGGUNG (HEBAT)</span></div><div class="row"><span style="font-size:20px; float:left; display: inline-block; vertical-align: middle;">Pemerintah Kabupaten Temanggung</span></div></div></a></div></div></div><div class="row" style="margin: 5px;"><div class="row title"><h4 style="float:left">Temanggung TV</h4></div><div class="row" style="margin:5px;"><a onclick="tv()"> <div class="col-md-12 pelayanan"><div class="col-md-9"><a onclick="tv()"> <img class="yutub" src="https://yt3.ggpht.com/a/AGF-l79iZIy7KdM7O7JRJxVF4EJ-7GzQXaOHiAwA-A=s288-c-k-c0xffffffff-no-rj-mo"></a></div><div class="col-md-1"><h6>.</h6></div></div></a></div></div><div class="row" style="margin: 5px;"><div class="row title"><h4 style="float:left">Data Temanggung</h4></div><div class="row" style="margin:5px;"><div class="col-md-12 pelayanan"><div class="col-md-1"><a target="_blank" href="http://gandem.temanggungkab.go.id/fo/"><img src="http://hebat.temanggungkab.go.id/assets/logo_kabupaten_temanggung-7d33861835241016b515cdb6643492051fc70d5bf8169be38cd35e04dc6378ad.png"></div><div class="col-md-9" style="text-align: center;"><div class="row"><span style="font-size:27px; float:left; display: inline-block; vertical-align: middle;">ONE DATA</span></div><div class="row"><span style="font-size:17px; float:left; display: inline-block; vertical-align: middle;">Temanggung</span></div></div></a></div></div></div><div class="row" style="margin: 5px;"><div class="row title"><h4 style="float:left">Layanan Kependudukan</h4></div><div class="row" style="margin:5px;"><div class="col-md-12 pelayanan"><div class="col-md-1"><a target="_blank" href="http://dindukcapil.temanggungkab.go.id/pelayanan"><img src="http://hebat.temanggungkab.go.id/assets/logo_kabupaten_temanggung-7d33861835241016b515cdb6643492051fc70d5bf8169be38cd35e04dc6378ad.png"></div><div class="col-md-9" style="text-align: center;"><div class="row"><span style="font-size:20px; float:left; display: inline-block; vertical-align: middle;">Dinas Kependudukan dan Pencatatan Sipil</span></div><div class="row"><span style="font-size:20px; float:left; display: inline-block; vertical-align: middle;">Kabupaten Temanggung</span></div></div></a></div></div></div><div class="row" style="margin: 5px;"><div class="row title"><h4 style="float:left">Cek Pajak Bumi dan Bangunan</h4></div><div class="row" style="margin:5px;"><div class="col-md-12 pelayanan"><div class="col-md-1"><a target="_blank" href="http://mapatda.temanggungkab.go.id/"><img src="http://hebat.temanggungkab.go.id/assets/logo_kabupaten_temanggung-7d33861835241016b515cdb6643492051fc70d5bf8169be38cd35e04dc6378ad.png"></div><div class="col-md-9" style="text-align: center;"><div class="row"><span style="font-size:27px; float:left; display: inline-block; vertical-align: middle;">BPPKAD</span></div><div class="row"><span style="font-size:17px; float:left; display: inline-block; vertical-align: middle;">Temanggung</span></div></div></a></div></div></div>',
                width: '1000px',
                customClass: {
                    html: 'swal-text',
                }
            });
        }

        var page = 1;

        function kurang() {
            page--;
            data_gallery(page);
        }

        function tambah() {
            page++;
            data_gallery(page);
        }

        function data_gallery($id) {
            var load = document.getElementById('loader');

            var id = $id;
            var _token = $('input[name="_token"]').val();

            $.ajax({
                url: "{{ route('gallery.fetch') }}",
                method: "POST",
                data: {
                    _token: _token,
                    id: id
                },
                success: function(data) {

                    var data = JSON.parse(data);
                    console.log(data);

                    var myImages = data.result.map(function(item) {
                        return "<a target='_blank' href='http://temanggung.mcity.id/files/gallery/" + item.gallery_photo + "'><div class='gallery-item'><div class='content'><img src='http://temanggung.mcity.id/files/gallery/" + item.gallery_photo + "' alt=''><div class='desc'>Pengunggah : " + item.name + "</div></div></div></a>";
                    }).join('');

                    Swal.fire({
                        title: '<span style="font-size:20px">Galeri<span>',
                        html: '<div class="button bisa-klik" onclick="kurang()"><</div><div class="button bisa-klik" onclick="tambah()">></div>' + '<div class="row">' + '<div class="gallery" id="gallery">' + myImages + '</div>' + '</div>',
                        imageAlt: 'Custom image',
                        width: '1000px'
                    })
                }
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            $('.klik-lain').click(function(e) {
                // var a = 1;
                // alert(a);
                $.ajax({
                    url: "{{ route('lain.fetch') }}",
                    method: "GET",
                    success: function(data) {
                        // console.log(data);
                        $('.lain-nya').html(data);

                    }
                });

            });

        });
    </script>
    <script>
        $(document).ready(function() {
            $('.close-lain').on('click', function() {
                $(".carousel-lain").css("display", "none");
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.klik-lain').on('click', function() {
                // $('.lain-nya').toggleClass('d-none');
                $("#carousel-lain").toggle();
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: 5,
                        nav: true,
                        loop: false
                    }
                }
            })
        });
    </script>

</body>

</html>