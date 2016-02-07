@extends('/app')

@section('content')

    {!! Form::open(['url' => url('/new'), 'method' => 'POST', 'class'=>'form-horizontal', 'id'=>'newButtonForm' ]) !!}

        <div class="controls-group">
            <label>
                What would you like to name your button?
            </label>
            <input type="text" name="name">
            <!-- TODO: add AJAX to check for existing button -->
        </div>


        <div class="controls-group">
            {!! Form::label('Want to protect your button with a password?', NULL, ['class'=>'control-label']) !!}

            <div class="controls">
                {!! Form::password('password', null, ['id' => 'orderNumber','tabindex' => '2']) !!}
            </div>

        </div>

        <input type="submit">
    </form>

@endsection

@section('foot-script')
    <script src="/js/script.js"></script>
@endsection