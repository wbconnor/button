@extends('/app')

@section('content')

<?php
if(!isset($button))
    {
        $error_message = "There's a problem Captain! We can't find that button.";
    }
?>

<div class="button-meta-data">
    @if(isset($button->name))
        <h2 id="button_name">{{ $button->name }}</h2>
    @endif
    <div class="clicks" id="clicks">
        @if(isset($button->clicks))
            <h1>{{ $button->clicks }}</h1>
        @else
            <h2>number of button clicks</h2>
        @endif
    </div>
</div>

<div class="button-container">
    <button id="button" class="circle-button"></button>
</div>
@endsection

@section('foot-script')
    <script src="/js/click.js"></script>
@endsection