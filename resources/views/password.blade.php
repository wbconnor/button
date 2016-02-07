@extends('/app')

@section('content')

        <div>
            {{ $button->name }} is password protected!
        </div>
    <!-- /p/ + button_name ?? -->
    <form action="/p/{{ $button->name }}" method="post" class="form-horizontal" id="newButtonForm">

        <div class="controls-group">
            <label class="control-label">
                Enter a password to proceed
            </label>

            <div class="controls">
                <input type="password" name="password" tabindex="2">
            </div>
        </div>

        <input type="submit">
    </form>

@endsection

@section('foot-script')
    <script src="/js/script.js"></script>
@endsection