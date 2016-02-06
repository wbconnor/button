@extends('/app')

@section('content')

    <div class="round-button">
        <div class="round-button-circle" style="background-color: {{ $new_color }}">
            <a href="/new" class="round-button" style="color: {{ $new_text_color }}">
                Make A New Button!
            </a>
        </div>
    </div>

    <div class="round-button">
        <div class="round-button-circle" style="background-color: {{ $find_color }}">
            <a href="/find" class="round-button" style="color: {{ $find_text_color }}">
                I Already Have A Button!
            </a>
        </div>
    </div>
@endsection

@section('foot-script')
    <script src="/js/script.js"></script>
@endsection