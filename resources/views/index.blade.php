@extends('/app')

@section('content')

    <div class="button-container">
        <button id="new_button" class="index-button" style="background-color: {{ $new_color }}; color: {{ $new_text_color }}">
            Make A New Button!
        </button>
    </div>

    <div class="round-button">
        <div class="round-button-circle" style="background-color: {{ $find_color }}">
            <a href="http://jsfiddle.net/user/josedvq/fiddles/" class="round-button" style="color: {{ $find_text_color }}">
                I Already Have A Button!
            </a>
        </div>
    </div>
@endsection

@section('foot-script')
    <script src="/js/script.js"></script>
@endsection