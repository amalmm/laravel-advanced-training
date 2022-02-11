<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="max-width:400; margin:0 auto 0 auto; padding:20px;">
     <h1>edit</h1>
            <a href="{{url('/')}}">index</a>
            <br>
            <br>
     <form method="post" action="{{url('/update',$data->id)}}">
        @csrf
        @method('put')
         <input type="text" name="name" value="{{$data->name}}">
         <input type="submit">

@if ($errors->any())
<ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif
     </form>

</body>
</html>