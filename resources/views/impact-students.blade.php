@extends('layouts.head')
@section('content')
    <div class="container mt-5">
        <div class="text-center">
            <h3 style="color: #4479bd;" class="p-2">Students</h3>
        </div>
        @foreach ($students as $student)
        <div class="card rounded p-4 my-2">
            <div class="row container-fluid">
                <div class="col-md-12">
                   {{-- pls put lots of photo of various activities. There are photos of the children watching a movie, and dancing etc. the photos are on the facebook page of Romil Sew Sanstha. There are photos of a dental camp too. pls use those --}}
                   <div class="row">
                    <div class="col-md-6">
                        <img src="{{ '/storage/'. $student->image }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h4>{{ $student->name }}</h4>
                        <?php echo $student->text; ?>
                    </div>
                   </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
