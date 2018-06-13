<!DOCTYPE <!DOCTYPE html>
<html>
<head>
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
</head>
<body>

<html>
<head>
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
                
            <div class="col-lg-8">
                <h1>All students</h1>
                <table class="table table-hover">
                    <tr class="success">
                        <th>Student number</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Total Fees</th>
                        <th>View</th>
                    </tr>

                    @foreach ($students as $student)
                        <tr>
                            <td>{{$student->id}}</td>
                            <td>{{$student->full_name}}</td>
                            <td>{{$student->address}}</td>
                            <td>{{$student->total}}</td>
                            <td><a href="/student_information/{{$student->id}}">View payment info</a></td
          
                        </tr>
                    @endforeach

                        <tr class="info">
                            <td></td>
                            <td></td>
                            <td><b>TOTAL FEES</b></td>
                            <td><b>{{$all_fees}}</b></td>
                            <td></td>
                        </tr>
                </table>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
    <center> <a href = "/"> <button class="btn btn-success">Go to homepage</button></a></center>
</body>
</html>



    
    
</body>
</html>