@extends('layouts.head')
@section('content')
<style>body {
    min-height: 100vh;
    /* display: flex; */
    align-items: center;
    background-color: rgb(233, 150, 150);
    font-family: 'Open Sans'
}

#demo {
    background: linear-gradient(112deg, #ffffff 50%, antiquewhite 50%);
    max-width: 900px;
    margin: auto
}

.carousel-caption {
    position: initial;
    z-index: 10;
    padding: 5rem 8rem;
    color: rgba(78, 77, 77, 0.856);
    text-align: center;
    font-size: 1.2rem;
    font-style: italic;
    font-weight: bold;
    line-height: 2rem
}

@media(max-width:767px) {
    .carousel-caption {
        position: initial;
        z-index: 10;
        padding: 3rem 2rem;
        color: rgba(78, 77, 77, 0.856);
        text-align: center;
        font-size: 0.7rem;
        font-style: italic;
        font-weight: bold;
        line-height: 1.5rem
    }
}

.carousel-caption img {
    width: 6rem;
    border-radius: 5rem;
    margin-top: 2rem
}

@media(max-width:767px) {
    .carousel-caption img {
        width: 4rem;
        border-radius: 4rem;
        margin-top: 1rem
    }
}

#image-caption {
    font-style: normal;
    font-size: 1rem;
    margin-top: 0.5rem
}

@media(max-width:767px) {
    #image-caption {
        font-style: normal;
        font-size: 0.6rem;
        margin-top: 0.5rem
    }
}

#demo i {
    background-color: #4470BD;
    padding: 1.4rem
}

@media(max-width:767px) {
    #demo i {
        padding: 0.8rem
    }
}

.carousel-control-prev {
    justify-content: flex-start
}

.carousel-control-next {
    justify-content: flex-end
}

.carousel-control-prev,
.carousel-control-next {
    transition: none;
    opacity: unset;
}
</style>
<div class="container mt-5">
    <div id="demo" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($testimonials as $testimonial)
            @if($loop->first)
            <div class="carousel-item active">
                <div class="carousel-caption">
                    <p><?php echo $testimonial->text; ?> </p> 
                    <img src="/storage/{{ $testimonial->image }}">
                    <div id="image-caption">{{ $testimonial->name }}</div>
                </div>
            </div>
            @else
            <div class="carousel-item">
                <div class="carousel-caption">
                    <p><?php echo $testimonial->text; ?> </p> 
                    <img src="/storage/{{ $testimonial->image }}">
                    <div id="image-caption">{{ $testimonial->name }}</div>
                </div>
            </div>
            @endif
            @endforeach
        </div> <a class="carousel-control-prev" href="#demo" data-slide="prev"> <i class='fas fa-arrow-left'></i> </a> <a class="carousel-control-next" href="#demo" data-slide="next"> <i class='fas fa-arrow-right'></i> </a>
    </div>
</div>
@endsection