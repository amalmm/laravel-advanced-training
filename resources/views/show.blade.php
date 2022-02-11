<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="max-width:400; margin:0 auto 0 auto; padding:20px;">
     <h1>show</h1>
            <a href="{{url('/')}}">index</a>
        <p style="border:1px solid gray;margin-bottom:20px; padding:20px;">
            {{ $data->id }} <br>
            {{ $data->name }} <br>
           created at {{ $data->created_at }} <br>
           updated at {{ $data->updated_at }} <br>
            <a href="{{url('/edit',$data->id)}}">edit</a>  <br>
            <form method="post" action="{{url('/delete',$data->id)}}">
                @csrf
                @method('delete')
                <input type="submit" value="delete">
            </form>
        </p>
</body>
</html>