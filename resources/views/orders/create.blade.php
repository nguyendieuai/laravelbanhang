<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="{{ route('orders.store') }}">
        {{ csrf_field() }}
        <label>{{ trans('order.label.ngaylaphoadon') }}</label><br/>
        <input name="ngaylaphoadon"><br/>
        @if ($errors->has('ngaylaphoadon'))                
            <span class="help-block">
                <strong>{{ $errors->first('ngaylaphoadon') }}</strong><br/>
            </span>
        @endif

        <label>{{ trans('order.label.diachigiaohang') }}</label><br/>
        <input name="diachigiaohang"><br/>
        @if ($errors->has('diachigiaohang'))                
            <span class="help-block">
                <strong>{{ $errors->first('diachigiaohang') }}</strong><br/>
            </span>
        @endif

        <label>{{ trans('order.label.tien') }}</label><br/>
        <input name="tien"><br/>
        @if ($errors->has('tien'))                
            <span class="help-block">
                <strong>{{ $errors->first('tien') }}</strong><br/>
            </span>
        @endif

        <label>{{ trans('order.label.ghichu') }}</label><br/>
        <input name="ghichu"><br/>
        @if ($errors->has('ghichu'))                
            <span class="help-block">
                <strong>{{ $errors->first('ghichu') }}</strong><br/>
            </span>
        @endif

        <label>{{ trans('order.label.customer_id') }}</label><br/>
        <input name="customer_id"><br/>
        @if ($errors->has('customer_id'))                
            <span class="help-block">
                <strong>{{ $errors->first('customer_id') }}</strong><br/>
            </span>
        @endif

        <button>Submit</button>
    </form>
</body>
</html>