@extends('/app')

@section('content')

    <form action="/new" method="post" class="form-horizontal" id="newButtonForm">

        <div class="controls-group">
            <label class="control-label">
                What would you like to name your button?
            </label>

            <div class="controls">
                @if(isset($name))
                    <input type="text" name="name" value="{{ $name }}" tabindex="1">
                @else
                    <input type="text" name="name" tabindex="1">
                @endif
            </div>
        </div>

        <div class="controls-group">
            <label class="control-label">
                Want to protect your button with a password?
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