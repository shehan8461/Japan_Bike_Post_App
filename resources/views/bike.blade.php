<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Document</title>
</head>
<body>

@foreach($errors->all() as $err)

<div class='alert alert-danger' role='alert'>
    {{$err}}
</div>


@endforeach
    
    <form method="post" action="/savebike">
    {{csrf_field()}}
        <lable>Name :</lable>
        <input type="text" name="name" /> <br><br>
        <lable>Bike Name :</lable>
        <input type="text" name="bname" /> <br><br>
        <lable>Location :</lable>
        <input type="text" name="location" /> <br><br>
        <lable>Milage :</lable>
        <input type="text" name="milage" /> <br><br>
        <lable>Engine-Capacity (CC) :</lable>
        <input type="text" name="engine" /> <br><br>
        <lable>Price :</lable>
        <input type="text" name="price" /> <br><br>
        <lable>Pone Number:</lable>
        <input type="text" name="phone" /> <br><br>
        <lable>Discription :</lable>
        <input type="text" name="discription" /> <br><br> <br>
     <button type="submit">Submit</button> <br><br><br><br>
</form>


       
                           
                    
                            
                         
                           




                     


</body>
</html>