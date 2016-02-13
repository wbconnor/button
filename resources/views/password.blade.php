@extends('/app')

@section('content')

    <div class="col-md-10 center-element">
        <h2 class="center-text">{{ $button->name }} is password protected!</h2>
    </div>

    <div class="col-md-5 center-element">

        <form action="/p/{{ $button->name }}" method="post" class="form-horizontal" id="newButtonForm">

            <div class="controls-group">

                <label class="control-label">
                    Enter the password to proceed
                </label>

                <div class="controls">
                    <input type="password" name="password" class="textbox" tabindex="2">
                </div>

            </div>

            <input type="submit">
        </form>

    </div>

@endsection

@section('foot-script')
    <script src="/js/script.js"></script>
@endsection