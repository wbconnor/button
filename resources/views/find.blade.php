@extends('/app')

@section('content')

    <div class="col-md-5 center-element">
        <form action="/find" method="post" class="form-horizontal" id="findButtonForm">

            <!-- TODO: add AJAX validation of button name -->

            <div class="controls-group">
                <label class="control-label">
                    What's your button's name?
                </label>

                <div class="controls">

                    @if(isset($name))
                        <input type="text" name="name" class="textbox" tabindex="1" value="{{ $name }}">
                    @else
                        <input type="text" name="name" class="textbox" tabindex="1">
                    @endif

                </div>
            </div>

            <input type="submit">

        </form>
    </div>

@endsection

@section('foot-script')
    <script src="/js/script.js"></script>
@endsection