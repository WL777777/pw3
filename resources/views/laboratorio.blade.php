<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
    
    <!-- @ é uma função do blade  -->
    @foreach($laboratorio as $lab)
       <p> {{$lab -> idLab}}</p>
       <p>{{$lab -> Lab}} </p>
    @endforeach


</body>
</html>