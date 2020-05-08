@extends('layouts.app')
@section('titulli')
    Detajet
@endsection
@section('content')


    <div class="card">
        <div class="card-header">{{$property->llojishpalljes}}</div>


        <div class="card-body">
            <div class="row">
                @foreach($explode as $arr)
                    <div class="col-3">

                        <img src="/thumbnail/{{$arr}}" style="width:100%" onclick="openModal();currentSlide(1)"
                             class="hover-shadow cursor">

                    </div>
                @endforeach


            </div>

            <div id="myModal" class="modal">
                <span class="close cursor" onclick="closeModal()">&times;</span>
                <div class="modal-content">
                    @foreach($explode as $arr1)
                    <div class="mySlides">
                        <div class="numbertext">1 / 4</div>
                        <img src="/images/{{$arr}}" style="width:100%">
                    </div>
                    @endforeach

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    <div class="caption-container">
                        <p id="caption"></p>
                    </div>

                    <div class="d-flex">
                        @foreach($explode as $arr2)
                        <div class="column">
                            <img class="demo cursor" src="/images/{{$arr2}}" style="width:100%"
                                 onclick="currentSlide(1)" alt="Nature and sunrise">
                        </div>
                       @endforeach


                    </div>
                </div>
            </div>


            <div class="row mt-3">
                <div class="col-4">
                    <div class="d-flex flex-column">
                        <h5>Banjo</h5>
                        <span style="margin-left:10px">{{$property->numri_banjove}} banjo.</span>

                    </div>
                </div>
                <div class="col-4">
                    <div class="d-flex flex-column">
                        <h5>Numri i Dhomave</h5>
                        <span style="margin-left:10px">{{$property->numri_dhomave}} dhoma.</span>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <h5>Siperfaqja</h5>
                        <span>{{$property->siperfaqja}}m2.</span>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-4">
                    <div class="d-flex flex-column">
                        <h5>Numri i Kateve(kati ne te cilin gjendet)</h5>
                        <span>Kati: {{$property->kati}} </span>
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-flex flex-column">
                        <h5>Numri Ballkonave</h5>
                        <span>{{$property->ballkonat}} ballkona.</span>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <h5>Ngrohja</h5>
                        <span> {{$property->ngrohja}}$</span>
                    </div>
                </div>

            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <div class="d-flex flex-column">
                        <h5>Komuna</h5>
                        <span>{{$property->komuna}} </span>
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-flex flex-column">
                        <h5>Adresa</h5>
                        <span>{{$property->adresa}}</span>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <h5>Qmimi</h5>
                        <span> {{$property->qmimi}}$</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <p>{{$property->komenti}}</p>
            </div>

        </div>
    </div>



    <style>


        .row > .column {
            padding: 0 8px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .column {
            float: left;
            width: 25%;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: black;
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            width: 90%;
            max-width: 1200px;
        }

        /* The Close Button */
        .close {
            color: white;
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #999;
            text-decoration: none;
            cursor: pointer;
        }

        .mySlides {
            display: none;
        }

        .cursor {
            cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        img {
            margin-bottom: -4px;
        }

        .caption-container {
            text-align: center;
            background-color: black;
            padding: 2px 16px;
            color: white;
        }

        .demo {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }

        img.hover-shadow {
            transition: 0.3s;
        }

        .hover-shadow:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
    <script>
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>


@endsection