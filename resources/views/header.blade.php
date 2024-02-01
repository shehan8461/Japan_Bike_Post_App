<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Style the navigation bar */
        body {
            
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color:black;
           
           
        }

        nav {
           position:relative;
            background-color: #333; /* Set background color for the navigation bar */
            overflow: hidden;
            height: 80px;
        }

        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 24px 79px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd; /* Change background color on hover */
            color: black;
        }

        nav a img {
            width: 35px; /* Set the width of the icons */
            height: 35px; /* Set the height of the icons */
            margin-right: 40px; /* Add some spacing between the icon and text */
        }
      
        .images,
        .jade-images,
        .tw-images,
        .ducati-images {
            position: relative;
            width: 320px;
            height: 270px;
            left:1%;
            margin-bottom: 50px; /* Add some spacing between the image sets */
        }
      
        .jade-images{
            position:absolute;
            top:10px;
            left:120%;
        }
        .tw-images{
            position:absolute;
            top:10px;
            left:130%;
        }
        .ducati-images{
            position:absolute;
            top:10px;
            left:120%;
        }
        .images img,
        .jade-images img,
        .tw-images img,
        .ducati-images img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease-in-out;
        }

        .images:hover img,
        .jade-images:hover img,
        .tw-images:hover img,
        .ducati-images:hover img {
            transform: scale(1.1); /* Increase the image size on hover */
        }

        #details,
        #jade-details,
        #tw-details,
        #ducati-details {
            position: absolute;
            top: 160%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 20px;
            width: 80%;
        }

        .images:hover #details,
        .jade-images:hover #jade-details,
        .tw-images:hover #tw-details,
        .ducati-images:hover #ducati-details {
            opacity: 1; /* Make details visible on hover */
        }
        
      
        



        
        table {
            position:absolute;
            top:300%;
           
           right:-100%;
            border-collapse: collapse;
            margin-top: 10px;
            
          
        }

        th, td {
           
            border: 1px solid white;
            padding-top: 40px;
          padding-left:130px;
          padding-right:130px;
            text-align: left;
        }

        th {
      
            background-color: #333;
            color: white;
           
        }

        tr {
            background-color: black;
            color:white;
            font-family: Arial, sans-serif;
            word-spacing:5px;
            text-align: right;
        }

        a {
            color: #00bfff;
            text-decoration: none;
            margin-right: 10px;
        }
        #navimg{
            position :absolute;
            top:10px;
            right:40px;
        }
        #main-topic {
            position :absolute;
            top:0px;
            right:180px;
  font-family: 'Arial', sans-serif; /* Choose an appropriate font */
  word-spacing:17px;
  letter-spacing:17px;
  color: red; /* Set the text color */
  text-align: center; /* Center the text */
  background-color: rgba(0, 0, 1, 0.9); /* Set a background color */
  padding: 5px; /* Add some padding around the text */
  border-radius: 10px; /* Add rounded corners for a nicer look */
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
}
    </style>
</head>
<body>
    
<nav>
    <a href="#home"><img src='/home.png'><b>Home</b></a> 
    <a href="/register"><img src='/add.png'><b>Post Ad</b></a> 
    <a href="/posts"><img src='/all.png'><b>All Ads</b></a>
    <img id="navimg" src='/nav1.jpg' width="90px" height="65px">
</nav>
<h1 id="main-topic"><b>Japan Biker</b></h1>
<br><br><br>

<div class="images">
<img src='/hornet.jpg'  width="320px"  height="270px">
<p id="details">For the standard type of solid color, set a refreshing pearl sunbeam white and fearless pearl cosmic black.Wheel also adopts white and black of similar colors to the car body, expressing lightness and powerfulness, respectively.For two-tone Deluxe type, two new colors are set.Youthful Glinto Wave Blue Metallic and calm Digital Silver Metallic are arranged on the upper surface of the tank and rear cowl, respectively, and a common graphite black is applied to the lower surface.Similarly, the current candy brazing red is changed to graphite black on the bottom.Also, on the sides of the front and rear wheels, pin stripes are arranged and it is sporty full of foot suspension.As a result, there are 5 standard colors, 2 colors of standard type and 3 colors of deluxe type, and the user's choice range is widened. </p>
<div>

<div class="jade-images">
<img src='/jade.jpg'  width="320px"  height="270px">
<p id="jade-details">We made the whole engine a fearless gray metallic paint, applied a buff finish with a luxurious feeling to the cylinder head cover and the left side crankcase cover and finished the right side crankcase cover (AC generator part) in a spin buff style, etc., made of traditional stainless steel Along with the muffler with deep gloss and so on, the texture is further enhanced. In addition, a big thick sheet that adopted a new pattern seat skin, and a taco meter that has become larger to the same diameter as the speedometer, and chromium plating is applied to the case where those meters are incorporated, attachment attached enough It is a naked model that further emphasizes the coming motorcycle likelihood. . </p>

<div>

<div class="tw-images">
<img src='/tw.jpg'  width="380px"  height="280px">
<p id="tw-details">We made the whole engine a fearless gray metallic paint, applied a buff finish with a luxurious feeling to the cylinder head cover and the left side crankcase cover and finished the right side crankcase cover (AC generator part) in a spin buff style, etc., made of traditional stainless steel Along with the muffler with deep gloss and so on, the texture is further enhanced. In addition, a big thick sheet that adopted a new pattern seat skin, and a taco meter that has become larger to the same diameter as the speedometer, and chromium plating is applied to the case where those meters are incorporated, attachment attached enough It is a naked model that further emphasizes the coming motorcycle likelihood. . </p>
<div>


<div class="ducati-images">
<img src='/ducati.jpg'  width="320px"  height="270px">
<p id="ducati-details">As of my last knowledge update in January 2022, I don't have specific details about Ducati bikes released after that date. Ducati is an Italian motorcycle manufacturer known for producing high-performance motorcycles, and they frequently release new models and updates.
For the most accurate and up-to-date information about Ducati bikes, including the latest models, specifications, and features, I recommend visiting the official Ducati website or contacting a Ducati dealership. They provide the most current and detailed information about their products. </p>
</div>
   

<table >
   <th> About us </th>
   <th> Contact us</th>
   <th> Summary</th>
   <th> Apps</th>

   <tr>
    <td> At [Japan Biker] </td>
    <td> 0766722019</td>
    <td> Japan has a rich and influential history in the world of motorcycles.</td>
    <td> <a href="https://ikman.lk/en">Ikman.lk</a>
    <a href="https://riyasewana.com/">IRiyasewana.lk</a>
        </td>

    </tr>
  
   

    </table>



</body>
</html>
