@extends('layouts.head')
@section('content')
    <div class="container mt-5">
        <div class="text-center">
            <h3 style="color: #4479bd;" class="p-2">Alumni Program</h3>
        </div>
        <div class="card rounded p-4">
            <div class="row container-fluid">
                <div class="col-md-12">
                    @if ($alumni != '')
                        <?php echo $alumni->text; ?>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
