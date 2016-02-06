@extends('/app')

@section('content')

    <form action="/find" method="post">
        <label>
            What's your button's name?
        </label>
        <input type="text" name="name">
        <input type="submit">
    </form>

@endsection

@section('foot-script')
    <script src="/js/script.js"></script>
@endsection