<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="{{ route('products.store') }}">
        {{ csrf_field() }}
        <label>{{ trans('product.label.ten') }}</label><br/>
        <input name="ten"><br/>
        @if ($errors->has('ten'))                
            <span class="help-block">
                <strong>{{ $errors->first('ten') }}</strong><br/>
            </span>
        @endif

        <label>{{ trans('product.label.anh') }}</label><br/>
        <input name="anh"><br/>
        @if ($errors->has('anh'))                
            <span class="help-block">
                <strong>{{ $errors->first('anh') }}</strong><br/>
            </span>
        @endif

        <label>{{ trans('product.label.gia') }}</label><br/>
        <input name="gia"><br/>
        @if ($errors->has('gia'))                
            <span class="help-block">
                <strong>{{ $errors->first('gia') }}</strong><br/>
            </span>
        @endif

        <label>{{ trans('product.label.soluong') }}</label><br/>
        <input name="soluong"><br/>
        @if ($errors->has('soluong'))                
            <span class="help-block">
                <strong>{{ $errors->first('soluong') }}</strong><br/>
            </span>
        @endif

        <label>{{ trans('product.label.category_id') }}</label><br/>
        <input name="category_id"><br/>
        @if ($errors->has('category_id'))                
            <span class="help-block">
                <strong>{{ $errors->first('category_id') }}</strong><br/>
            </span>
        @endif
        
        <button>Submit</button>
    </form>

</body>
</html>