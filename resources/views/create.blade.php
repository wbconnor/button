@extends('/app')

@section('content')

    <form action="/new" method="post">

        <div class="form-input">
            <label>
                What would you like to name your button?
            </label>
            <input type="text" name="name">
        </div>

        <div class="form-input">
            <label>
                Want to protect your button with a password?
            </label>
            <input type="password" name="password">
        </div>

        <input type="submit">
    </form>

@endsection

@section('foot-script')
    <script src="/js/script.js"></script>
@endsection