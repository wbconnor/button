@extends('/app')

@section('content')

    <form action="/new" method="post" class="form-horizontal" id="newButtonForm">

        <div class="controls-group">
            <label class="control-label">
                What would you like to name your button?
            </label>

            <div class="controls">
                <input type="text" name="name" tabindex="1">
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