@extends('/app')

@section('content')
<div class="button-meta-data">
    name of button
    <div class="clicks" id="clicks">number of button clicks</div>
</div>

<div class="button-container">
    <button id="button" class="circle-button"></button>
</div>
@endsection

@section('foot-script')
    <script src="/js/script.js"></script>
@endsection