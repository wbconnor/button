@extends('/app')

@section('content')

    <form action="/find" method="post" class="form-horizontal" id="findButtonForm">

        <!-- TODO: add AJAX validation of button name -->

        <div class="controls-group">
            <label class="control-label">
                What's your button's name?
            </label>

            <div class="controls">
                <input type="text" name="name" tabindex="1">
            </div>
        </div>

        <input type="submit">

    </form>

@endsection

@section('foot-script')
    <script src="/js/script.js"></script>
@endsection