@extends('layouts.head')
@section('content')
    <div class="container mt-5">
        <div class="text-center">
            <h3 style="color: #4479bd;" class="p-2">Students</h3>
        </div>
        <div class="card rounded p-4">
            <div class="row container-fluid">
                <div class="col-md-12">
                   {{-- pls put lots of photo of various activities. There are photos of the children watching a movie, and dancing etc. the photos are on the facebook page of Romil Sew Sanstha. There are photos of a dental camp too. pls use those --}}
                   <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/students/student-3.jpeg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h4>NAINIKA</h4>
                        <p>Nainika is an 11-year-old student, studying in class V. She  lives in a joint family with 10 other members, including a  brother and 2 cousins. Her father, Ashok, studied until Class  XII and is an engineer who owns his own factory. Her  mother, Preeti, also studied until Class XII and is a  housewife.
                            Nainika wants to be a great doctor, fighting against poverty,  disease and environmental concern. She is especially  frustrated with the status of Indian government-run hospitals,  where poorer patients are unable to afford good treatment,  medicines and even find it difficult to schedule appointments.  She therefore wants to spend a portion of the money she  makes to treat poorer patients with better treatment and free  medicines, and potentially run an NGO to help these  patients!</p>
                    </div>
                   </div>
                </div>
            </div>
        </div>

        <div class="card rounded p-4 mt-2">
            <div class="row container-fluid">
                <div class="col-md-12">
                   {{-- pls put lots of photo of various activities. There are photos of the children watching a movie, and dancing etc. the photos are on the facebook page of Romil Sew Sanstha. There are photos of a dental camp too. pls use those --}}
                   <div class="row">
                    <div class="col-md-6">
                        <h4>Rohan</h4>
                        <p>Rohan Chajlana is a former student who currently studies in the 7th standard at  the Balvantray Mehta Vidya Bhawan, through our ‘Create a Future’ program. His  father is a government servant and mother is a homemaker. Below, he describes  his passion for boxing in his own words: <i>“One day I was standing on my terrace and saw some children practicing  boxing - I was immensely fascinated by their boxing techniques and steps.  That was the moment when I decided to join the boxing training club. I  received many setbacks and the ﬁrst and the most unbearable setback was  that my parents were against my decision as, for them, education is the most  important thing. I tried my level best to convince them, and I did too! I  promised them that I will maintain a balance between my studies and my  boxing, and I work very hard to keep this balance. I wake up early in the  morning at 6, devoting 2 hours to my studies then then attend my tuitions  from 10am to 12pm. Then in the evening I straight away go for my boxing  training after returning from school at 7:15pm. Then, from 7:30pm to  9:30pm, I am busy at boxing practice. When I reach home, I have my dinner  and go to sleep. I am working so hard because boxing is my passion. I want to be a perfect  boxer in the future and bring a gold medal in boxing for my country.”</i></p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/students/student-4.jpeg') }}" alt="" class="img-fluid">
                    </div>
                   </div>
                </div>
            </div>
        </div>


        <div class="card rounded p-4 mt-2">
            <div class="row container-fluid">
                <div class="col-md-12">
                   {{-- pls put lots of photo of various activities. There are photos of the children watching a movie, and dancing etc. the photos are on the facebook page of Romil Sew Sanstha. There are photos of a dental camp too. pls use those --}}
                   <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/students/student-1.jpeg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h4>PRATIBHA</h4>
                        <p>Pratibha is a 10-year-old student, studying in Class V. She  lives with her parents and 5 year old sister, Ranak. Her  father, Sanjay, studied until class X and is a driver, while her  mother, Seema is a homemaker who studied until class XII.
                            Pratibha dreams of being a famous, honest lawyer, and is  determined to help the poor, free of charge. She is  particularly concerned with the abuse and sexual  harassment of young girls in India and hopes to fight for such  girls and bring them justice!</p>
                    </div>
                   </div>
                </div>
            </div>
        </div>

        <div class="card rounded p-4 mt-2">
            <div class="row container-fluid">
                <div class="col-md-12">
                   {{-- pls put lots of photo of various activities. There are photos of the children watching a movie, and dancing etc. the photos are on the facebook page of Romil Sew Sanstha. There are photos of a dental camp too. pls use those --}}
                   <div class="row">
                    <div class="col-md-6">
                        <h4>MANSI</h4>
                        <p>Mansi is an 11-year-old student, studying in class V. She  lives in a joint-family of 12 members, including 2 brothers  and 3 cousins. Her father, Om Prakash is a shopkeeper who  has studied up till the 10th standard. Her mother Saroj has  also studied till the 10th standard and is a homemaker.
                            She is inspired by her uncle, who is a dancer, and wants to  be a dancer as well. Mansi hopes to perform in Bollywood,  and in other countries around the world as well. She is  confident that one day she will achieve her goal of being a  successful dancer, and RWS will be proud to remember her  as a former student of their school!</p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/students/student-2.jpeg') }}" alt="" class="img-fluid">
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection
