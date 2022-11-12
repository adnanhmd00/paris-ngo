@extends('layouts.head')
@section('content')
    <div class="container mt-5">
        <div class="text-center">
            <h3 style="color: #4479bd;" class="p-2">Community Outreach</h3>
        </div>
        <div class="card rounded p-4">
            <div class="row container-fluid">
                <div class="col-md-12">
                    <?php echo $community->text; ?>
                    <div class="text-center">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Fnahimeansno%2Fvideos%2F1258621934302461%2F&show_text=false&width=476&t=0" width="476" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
