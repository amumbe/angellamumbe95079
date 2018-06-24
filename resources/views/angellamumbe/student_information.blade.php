<?php
?>

<html>
<head>
    <title>Student information</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>total fees</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
    <script src="main.js"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>

            <div class="col-lg-6">
                <h1>Student Details</h1>
                <h4>Student_id: {{$student_number}}<br></h4>
                <h4>Full_name:  {{$student_name}}<br></h4>

                <h1>Fees Transaction</h1>
                    <table class="table table-hover">
                        <tr class="success">
                            
                            <th>Transaction Id</th>
                            <th>Date of Payment</th>
                            <th>Amount</th>
                        </tr>

                        @foreach ($student as $students)
                            <tr>
                            
                                <td>{{$students->id}}</td>
                                <td>{{$students->date_paid}}</td>
                                <td>{{$students->amount}}</td>
                            </tr>
                        @endforeach
                    </table>
            </div>
        

            <div class="col-lg-3"></div>
        </div>
    </div>
    <center> <a href = "/"> <button class="btn btn-success">Go to homepage</button></a></center>
</body>
</html>
