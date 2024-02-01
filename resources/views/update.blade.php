<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <style>
    body {
            background-image: url('/t.jpg'); /* Replace 'your-background-image.jpg' with the path to your image */
            background-size: cover; /* Ensure the background image covers the entire viewport */
            font-family: 'Arial', sans-serif; /* Set font family */
            color: #fff; /* Set text color to white */
            padding: 20px; /* Add some padding to the body */
            margin: 0; /* Remove default margin */
        }

        h2 {
            color: #fff; /* Set text color for the heading */
            text-align: center; /* Center the heading */
            margin-bottom: 20px; /* Add bottom margin to the heading */
        }

        form {
            max-width: 400px; /* Set maximum width for the form */
            margin: 0 auto; /* Center the form */
            background: rgba(255, 255, 255, 0.8); /* Add a semi-transparent white background to the form */
            padding: 20px; /* Add padding to the form */
            border-radius: 10px; /* Add rounded corners to the form */
        }

        input {
            width: 100%; /* Make the input fields fill the width of the container */
            padding: 10px; /* Add padding to the input fields */
            margin-bottom: 10px; /* Add bottom margin to the input fields */
            box-sizing: border-box; /* Include padding and border in the input's total width */
        }

        input[type="submit"] {
            background-color: #4CAF50; /* Set background color for the submit button */
            color: #fff; /* Set text color for the submit button */
            cursor: pointer; /* Add pointer cursor on hover */
        }
        lable{
            color:black;
        }
        </style>
</head>
<body>
    <h2>Edit Details !</h2>
    <form method="post" action="/updateview">

    {{csrf_field()}}    
    <lable>Name :</lable>
         <input type="text" name="name" value="{{$bikedata->name}}"/> <br><br>
         <lable>Bike Name :</lable>
        <input type="text" name="bname" value="{{$bikedata->bikename}}" /> <br><br>
        <lable>Location :</lable>
        <input type="text" name="location" value="{{$bikedata->location}}" /> <br><br>
        <lable>Milage :</lable>
        <input type="text" name="milage"  value="{{$bikedata->milage}}"/> <br><br>
        <lable>Engine-Capacity (CC) :</lable>
        <input type="text" name="engine" value="{{$bikedata->engine_capacity}}"/> <br><br>
        <lable>Price :</lable>
        <input type="text" name="price" value="{{$bikedata->price}}"/> <br><br>
        <lable>Pone Number:</lable>
        <input type="text" name="phone" value="{{$bikedata->phone_number}}"/> <br><br>
        <lable>Discription :</lable>
        <input type="text" name="discription" value="{{$bikedata->discription}}"/> <br><br>

        <input type="hidden" name="id" value="{{$bikedata->id}}"/> <br><br>

        <input type="submit" value="update"/>
</form>
</body>
</html>