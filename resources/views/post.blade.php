<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"/>
    <title>Document</title>
</head>
<body>

<table>
    <th>ID </th>
    <th> User Name</th>
    <th> Bike Name</th>
    <th>Location </th>
    <th> Milage</th>
    <th> Engine-Capacity</th>
    <th> Price</th>
    <th> Phone Number</th>
    <th>Discription</th>
    <th>Action </th>


    @foreach($bike as $b)
<tr>
                 <td>  <b> {{$b->id}} </b> </td> 
                 <td> <b> {{$b->name}} </b> </td> 
                 <td> <b> {{$b->bikename}} </b>  </td> 
                 <td> <b>   {{$b->location}} </b> </td> 
                 <td>  <b> {{$b->milage}}  </b> </td> 
                 <td> <b>  {{$b->engine_capacity}} </b> </td> 
                 <td>  <b> {{$b->price}}  </b> </td> 
                 <td>  <b> {{$b->phone_number}}  </b> </td> 
                   <td>  <b>  {{$b->discription}}  </b> </td>  <br>
                   
 <td>
<Button><a href="/updatedetails/{{$b->id}}" >Edit</a> </Button> <t> <t>
<Button><a href="/deletedetails/{{$b->id}}" >Delete</a> </Button> 
</td>


</tr>

@endforeach   
</table>

                 
                
</body>
</html>