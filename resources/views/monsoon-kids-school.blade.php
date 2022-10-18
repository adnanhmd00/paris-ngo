@extends('layouts.head')
@section('content')
    <div class="container mt-5">
        <div class="text-center">
            <h3 style="color: #4479bd;" class="p-2">Monsoon Kids School</h3>
        </div>
        <div class="card rounded p-4">
            <div class="row container-fluid">
                <div class="col-md-12">
                    <div class="text-center">
                        <h5>School Principles</h5>
                    </div>
                    <div>
                        <b>We strive to:</b>
                        <p>Create a safe, joyful and inclusive environment  that is conducive to Learning</p>
                        <p>Encourage holistic development that includes  the intellectual, physical, social, creative and  emotional growth of every child</p>
                        <p>Foster a sense of intellectual curiosity and  reflection</p>
                        <p>Inculcate empathy, compassion and respect  for each other and their environment</p>
                        <p>Engage all stakeholders in the child’s  education, including teachers, alumni, parents,  and their communities</p>
                        <p>Ensure learning is contextual, relevant and  linked to the lives and environment of children</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3 rounded p-4">
            <div class="row container-fluid">
                <div class="col-md-12">
                    <div class="text-center">
                        <h5>Graph Goes Here</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3 rounded p-4">
            <div class="row container-fluid">
                <div class="col-md-12">
                    <div class="text-center">
                        <h5>School Infrastructure</h5>
                    </div>
                    <div>
                        In 2019, the organisation rebranded, including a change in name from “Radico Welfare School” to “Romil  Sewa Sanstha”. This is accompanied by a change in the name of the school to “Monsoon Kids”. This  rebranding was accompanied by the redesign of the school logo, an upgrade of the school gate, and the  students were also given new uniforms.
                    </div>
                    <div class="row text-center mt-2">
                        <div class="col-md-6">
                            <img src="{{ asset('assets/images/school-1.jpg') }}" class="img-fluid" style="height: 450px; width: 400px;" alt="Old School Image">
                            <p>Before</p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('assets/images/school-2.jpg') }}" class="img-fluid" style="height: 450px; width: 400px;" alt="New School Image">
                            <p>After</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3 rounded p-4">
            <div class="row container-fluid">
                <div class="col-md-12">
                    <div class="text-center">
                        <h5>Curriculum</h5>
                    </div>
                    <div>
                        The school curriculum has been designed such that the students are constantly learning by doing. This is an  important learning mechanism and incorporates various teaching-learning methods including project and  activity based learning. The teachers utilise activity guides in order to accompany the NCERT text book  work to implement these methods in their classrooms.
                    </div>
                    <div class="row text-center mt-2">
                        <div class="col-md-6 col-lg-4">
                            <img src="{{ asset('assets/images/curriculum-1.jpg') }}" class="img-fluid" style="height: 450px; width: 100%;" alt="Old School Image">
                            <p><small>Students learning the usage of ‘A’ and  ‘An through an activity</small></p>
                        </div>
                        <div class="col-md-6 col-lg-8">
                            <img src="{{ asset('assets/images/curriculum-2.jpg') }}" class="img-fluid" style="height: 450px; width: 100%;" alt="New School Image">
                            <p><small>Students practicing 1-1 correspondence of matching the digits to the number concept</small></p>
                        </div>
                    </div>

                    <div class="row text-center mt-2">
                        <div class="col-md-6 col-lg-4">
                            <img src="{{ asset('assets/images/curriculum-3.jpg') }}" class="img-fluid" style="height: 450px; width: 100%;" alt="Old School Image">
                            <p><small>Students comparing measurements by body parts and  a measuring tape to understand standard units</small></p>
                        </div>
                        <div class="col-md-6 col-lg-8">
                            <img src="{{ asset('assets/images/curriculum-4.jpg') }}" class="img-fluid" style="height: 450px; width: 100%;" alt="New School Image">
                            <p><small>Students using activity blocks to practice addition and subtraction</small></p>
                        </div>
                    </div>

                    <div class="row text-center mt-2">
                        <div class="col-md-6 col-lg-4">
                            <img src="{{ asset('assets/images/curriculum-5.jpg') }}" class="img-fluid" style="height: 450px; width: 100%;" alt="Old School Image">
                        </div>
                        <div class="col-md-6 col-lg-8">
                            <img src="{{ asset('assets/images/curriculum-6.jpg') }}" class="img-fluid" style="height: 450px; width: 100%;" alt="New School Image">
                        </div>
                    </div>
                    <p class="text-center"><small>Students learning through project based classwork</small></p>

                    <div class="row text-center mt-2">
                        <div class="col-md-6 col-lg-4">
                            <img src="{{ asset('assets/images/curriculum-7.jpg') }}" class="img-fluid" style="height: 450px; width: 100%;" alt="Old School Image">
                        </div>
                        <div class="col-md-6 col-lg-8">
                            <img src="{{ asset('assets/images/curriculum-8.jpg') }}" class="img-fluid" style="height: 450px; width: 100%;" alt="New School Image">
                        </div>
                    </div>
                    <p class="text-center"><small>Students working collaboratively in small groups</small></p>

                    <div class="row text-center mt-2">
                        <div class="col-md-6 col-lg-4">
                            <img src="{{ asset('assets/images/curriculum-9.jpg') }}" class="img-fluid" style="height: 450px; width: 100%;" alt="Old School Image">
                        </div>
                        <div class="col-md-6 col-lg-8">
                            <img src="{{ asset('assets/images/curriculum-10.jpg') }}" class="img-fluid" style="height: 450px; width: 100%;" alt="New School Image">
                        </div>
                    </div>
                    <p class="text-center"><small>Students practicing phonic recognition of letters and blending</small></p>

                    <div class="row text-center mt-2">
                        <div class="col-md-6 col-lg-4">
                            <img src="{{ asset('assets/images/curriculum-11.jpg') }}" class="img-fluid" style="height: 450px; width: 100%;" alt="Old School Image">
                            <p><small>Students working on improving their fine motor skills  through string beading</small></p>
                        </div>
                        <div class="col-md-6 col-lg-8">
                            <img src="{{ asset('assets/images/curriculum-12.jpg') }}" class="img-fluid" style="height: 450px; width: 100%;" alt="New School Image">
                            <p><small>Students working on improving their hand-eye coordination by  bowling</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
