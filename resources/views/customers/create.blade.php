<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="{{ route('customers.store') }}">
        {{ csrf_field() }}
        <label>{{ trans('customer.label.ten') }}</label><br/>
        <input name="ten"><br/>
        @if ($errors->has('ten'))                
            <span class="help-block">
                <strong>{{ $errors->first('ten') }}</strong><br/>
            </span>
        @endif

        <label>{{ trans('customer.label.sdt') }}</label><br/>
        <input name="sdt"><br/>
        @if ($errors->has('sdt'))                
            <span class="help-block">
                <strong>{{ $errors->first('sdt') }}</strong><br/>
            </span>
        @endif

        <label>{{ trans('customer.label.diachi') }}</label><br/>
        <input name="diachi"><br/>
        @if ($errors->has('diachi'))                
            <span class="help-block">
                <strong>{{ $errors->first('diachi') }}</strong><br/>
            </span>
        @endif
        
        <button>Submit</button>
    </form>

</body>
</html>