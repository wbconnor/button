@extends('/app')

@section('title')
    Button
@endsection

@section('content')
<div class="button-meta-data">
    name of button
    <div class="clicks" id="clicks">number of button clicks</div>
</div>

<div class="round-button">
    <div class="round-button-circle">
        <button id="button" class="responsive-circle-button"></button>
    </div>
</div>
@endsection

@section('foot-script')
    <script src="/js/script.js"></script>
@endsection