@extends('/app')

@section('content')

    <div class="button-container">
        <button id="new_button" class="index-button" style="background-color: {{ $new_color }}; color: {{ $new_text_color }}">
            Make A New Button!
        </button>
    </div>

    <div class="button-container">
        <button id="find_button" class="index-button" style="background-color: {{ $find_color }}; color: {{ $find_text_color }}">
            I Already Have A Button!
        </button>
    </div>
@endsection

@section('foot-script')
    <script src="/js/script.js"></script>
@endsection