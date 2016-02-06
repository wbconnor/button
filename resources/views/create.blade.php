@extends('/app')

@section('content')

    <form action="/new" method="post">
        <label>
            What would you like to name your button?
        </label>
        <input type="text" name="name">

        <label>
            Want to protect your button with a password?
        </label>
        <input type="password">
        
        <input type="submit">
    </form>

@endsection

@section('foot-script')
    <script src="/js/script.js"></script>
@endsection