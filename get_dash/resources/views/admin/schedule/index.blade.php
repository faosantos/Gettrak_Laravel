@extends('layouts.dash')
@section('content')
    <div id="content-wrapper">
        <div class="container-fluid">
            
        </div>
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © {{config('app.name')}} {{date('Y', time())}}</span>
                </div>
            </div>
        </footer>
    </div>
@endsection
