<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="{{ route('orderdetails.store') }}">
        {{ csrf_field() }}
        <label>{{ trans('orderdetail.label.dongia') }}</label><br/>
        <input name="dongia"><br/>
        @if ($errors->has('dongia'))                
            <span class="help-block">
                <strong>{{ $errors->first('dongia') }}</strong><br/>
            </span>
        @endif

        <label>{{ trans('orderdetail.label.soluongmua') }}</label><br/>
        <input name="soluongmua"><br/>
        @if ($errors->has('soluongmua'))                
            <span class="help-block">
                <strong>{{ $errors->first('soluongmua') }}</strong><br/>
            </span>
        @endif

        <label>{{ trans('orderdetail.label.order_id') }}</label><br/>
        <input name="order_id"><br/>
        @if ($errors->has('order_id'))                
            <span class="help-block">
                <strong>{{ $errors->first('order_id') }}</strong><br/>
            </span>
        @endif

        <label>{{ trans('orderdetail.label.product_id') }}</label><br/>
        <input name="product_id"><br/>
        @if ($errors->has('product_id'))                
            <span class="help-block">
                <strong>{{ $errors->first('product_id') }}</strong><br/>
            </span>
        @endif

        <button>Submit</button>
    </form>

</body>
</html>