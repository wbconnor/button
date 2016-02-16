@extends('/app')

@section('content')

    <div class="center-element col-md-5">

        <form action="/new" method="post" class="form-horizontal" id="newButtonForm">

            <div class="controls-group">
                <label class="control-label">
                    What would you like to name your button?
                </label>

                <div class="controls">
                    @if(isset($name))
                        <input type="text" name="name" class="textbox" value="{{ $name }}" tabindex="1">
                    @else
                        <input type="text" name="name" class="textbox" tabindex="1">
                    @endif
                </div>
            </div>

            <div class="controls-group">
                <label class="control-label">
                    Want to protect your button with a password?
                </label>

                <div class="controls">
                    <input type="password" name="password" class="textbox" tabindex="2">
                </div>
            </div>

            <div class="submit-container">
                <input type="submit" class="circle-button">
            </div>

        </form>

    </div>

@endsection

{{--@section('foot-script')--}}
    {{--<script src="/js/script.js"></script>--}}
{{--@endsection--}}

