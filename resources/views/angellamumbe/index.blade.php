<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
<body><center>
         
        <br><br><br><br><br><br><br>
        <form method="get" action="/search">
           {{csrf_field()}}
          <input type="text" placeholder="Enter student number" name="student_number" required>
          <input type="submit" value="Search" class="btn btn-primary">
        </form><br>

       

        Am here

    <br>
<a href = "/fees"> <button class="btn btn-success">Enter new payments</button></a><br><br>
<a href = "/student"> <button class="btn btn-success">Register new students</button></a><br><br>
<a href = "/totalfees"> <button class="btn btn-success">Total fees</button></a>


	</center>

</body>