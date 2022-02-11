<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="max-width:400; margin:0 auto 0 auto; padding:20px;">
     <h1>index</h1>

<a href="{{url('/')}}">reset</a>

<form action="" method="get" >
    <select name="order"  onchange="submit">
        <option value="asc">asc</option>
        <option value="desc">desc</option>
    </select>
    <input type="submit" name="action" >
</form>


            <a href="{{url('/create')}}">create</a>
            @if($data)
     @foreach($data as $datas)
        <p style="border:1px solid gray;margin-bottom:20px; padding:20px;">
            {{ $datas->id }} <br>
            {{ $datas->name }} <br>
            created at {{ $datas->created_at }} <br>
           updated at {{ $datas->updated_at }} <br>
            <a href="{{url('/show',$datas->id)}}">show</a>
        </p>
     @endforeach
     @endif
</body>
</html>