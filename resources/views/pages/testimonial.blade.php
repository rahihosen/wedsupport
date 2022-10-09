@extends('layouts.main')
@section('content')
    <div class="col-12" style="padding-top: 50px">
        <div class="container" style="padding: 5em;  width:100%;  background-color:rgba(155, 152, 153, 0.29);">
            <h2 style="text-align:center;font-size:25px; ">Members Who Have found Love</h2>
            <div class="row" style="padding-top: 50px">


                <div class="card" data-city="1">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/13.jpg') }}"
                            style=" border-radius: 50%;width:200px;height:200px;">
                        <h4 style="padding-top: 10px">Alhamdulillah we found each other</h4>
                        <p>
                            Budapest is the capital city of Hungary. It is best known for its arts and culture. It is a
                            relatively small city, however there are much to see and do.
                            <span class="dots">...</span>
                            <span class="more" style="display: none;">Situated on thermal springs, there are many
                                naturally heated baths to relax in, the Széchenyi baths are the largest with 15 indoor baths
                                and 3 outdoor. There are many spectacular viewpoints in Budapest, great for capturing the
                                views of the city. From 360 panoramic views up at St Stephens Basilica to a wide view of the
                                parliament and the River at Fisherman’s Bastion. Visit the Museum of Fine Arts and enjoy a
                                day amongst famous European art. Classical music lovers will appreciate a performance at the
                                Academy of Music.</span>
                        </p>
                        <button onclick="readMore('1')" class="myBtn" style="margin-bottom: 20px">Read more</button>
                    </div>
                </div>

                <div class="card" data-city="2">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/13.jpg') }}"
                            style=" border-radius: 50%;width:200px;height:200px;">
                        <h4 style="padding-top: 10px">Alhamdulillah we found each other</h4>
                        <p>
                            Barcelona, framed for its individuality, cultural interest, and physical beauty, home to art and
                            architecture. Facing the Mediterranean to the southeast,
                            <span class="dots">...</span>
                            <span class="more" style="display: none;"> the city is one of a kind. Upon visiting
                                make sure you visit the spectacular and unique Park Güell which was firstly designed for a
                                town up in the mountains by artist Antoni Gaudí. Gaudí's work is admired by architects
                                around the World as being one of the most unique and distinctive styles in modern
                                architecture. Other places worth visiting is the La Sagrada Família, is a giant basilica.
                                With beaches on your doorstop, and art and city culture, this diverse city has everything to
                                offer.</span>
                        </p>
                        <button onclick="readMore('2')" class="myBtn" style="margin-bottom: 20px">Read
                            more</button>
                    </div>
                </div>
                <div class="card" data-city="3">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/13.jpg') }}"
                            style=" border-radius: 50%;width:200px;height:200px;">
                        <h4 style="padding-top: 10px">Alhamdulillah we found each other</h4>
                        <p>
                            Barcelona, framed for its individuality, cultural interest, and physical beauty, home to art and
                            architecture. Facing the Mediterranean to the southeast,
                            <span class="dots">...</span>
                            <span class="more" style="display: none;"> the city is one of a kind. Upon visiting
                                make sure you visit the spectacular and unique Park Güell which was firstly designed for a
                                town up in the mountains by artist Antoni Gaudí. Gaudí's work is admired by architects
                                around the World as being one of the most unique and distinctive styles in modern
                                architecture. Other places worth visiting is the La Sagrada Família, is a giant basilica.
                                With beaches on your doorstop, and art and city culture, this diverse city has everything to
                                offer.</span>
                        </p>
                        <button onclick="readMore('3')" class="myBtn" style="margin-bottom: 20px">Read
                            more</button>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 50px">


                <div class="card" data-city="4">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/13.jpg') }}"
                            style=" border-radius: 50%;width:200px;height:200px;">
                        <h4 style="padding-top: 10px">Alhamdulillah we found each other</h4>
                        <p>
                            Budapest is the capital city of Hungary. It is best known for its arts and culture. It is a
                            relatively small city, however there are much to see and do.
                            <span class="dots">...</span>
                            <span class="more" style="display: none;">Situated on thermal springs, there are many
                                naturally heated baths to relax in, the Széchenyi baths are the largest with 15 indoor baths
                                and 3 outdoor. There are many spectacular viewpoints in Budapest, great for capturing the
                                views of the city. From 360 panoramic views up at St Stephens Basilica to a wide view of the
                                parliament and the River at Fisherman’s Bastion. Visit the Museum of Fine Arts and enjoy a
                                day amongst famous European art. Classical music lovers will appreciate a performance at the
                                Academy of Music.</span>
                        </p>
                        <button onclick="readMore('4')" class="myBtn" style="margin-bottom: 20px">Read
                            more</button>
                    </div>
                </div>

                <div class="card" data-city="5">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/13.jpg') }}"
                            style=" border-radius: 50%;width:200px;height:200px;">
                        <h4 style="padding-top: 10px">Alhamdulillah we found each other</h4>
                        <p>
                            Barcelona, framed for its individuality, cultural interest, and physical beauty, home to art and
                            architecture. Facing the Mediterranean to the southeast,
                            <span class="dots">...</span>
                            <span class="more" style="display: none;"> the city is one of a kind. Upon visiting
                                make sure you visit the spectacular and unique Park Güell which was firstly designed for a
                                town up in the mountains by artist Antoni Gaudí. Gaudí's work is admired by architects
                                around the World as being one of the most unique and distinctive styles in modern
                                architecture. Other places worth visiting is the La Sagrada Família, is a giant basilica.
                                With beaches on your doorstop, and art and city culture, this diverse city has everything to
                                offer.</span>
                        </p>
                        <button onclick="readMore('5')" class="myBtn" style="margin-bottom: 20px">Read
                            more</button>
                    </div>
                </div>
                <div class="card" data-city="6">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/13.jpg') }}"
                            style=" border-radius: 50%;width:200px;height:200px;">
                        <h4 style="padding-top: 10px">Alhamdulillah we found each other</h4>
                        <p>
                            Barcelona, framed for its individuality, cultural interest, and physical beauty, home to art and
                            architecture. Facing the Mediterranean to the southeast,
                            <span class="dots">...</span>
                            <span class="more" style="display: none;"> the city is one of a kind. Upon visiting
                                make sure you visit the spectacular and unique Park Güell which was firstly designed for a
                                town up in the mountains by artist Antoni Gaudí. Gaudí's work is admired by architects
                                around the World as being one of the most unique and distinctive styles in modern
                                architecture. Other places worth visiting is the La Sagrada Família, is a giant basilica.
                                With beaches on your doorstop, and art and city culture, this diverse city has everything to
                                offer.</span>
                        </p>
                        <button onclick="readMore('6')" class="myBtn" style="margin-bottom: 20px">Read
                            more</button>
                    </div>
                </div>
            </div>





        </div>



    </div>

    </div>




    <div class="container">

        <ul class="pager">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
        </ul>
    </div>


    {{-- ---------read more----------- --}}

    {{-- -----------------------js---------------- --}}

    <script>
        function readMore(city) {
            let dots = document.querySelector(`.card[data-city="${city}"] .dots`);
            let moreText = document.querySelector(`.card[data-city="${city}"] .more`);
            let btnText = document.querySelector(`.card[data-city="${city}"] .myBtn`);

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.textContent = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.textContent = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>

    {{-- -----------------------js---------------- --}}
    {{-- ---------read more----------- --}}



    {{-- -----------previous next----------- --}}
    {{-- -----------------------js---------------- --}}


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    {{-- ---------------js----------------- --}}
    {{-- -----------previous next----------- --}}


    <br><br><br><br><br>

@endsection
