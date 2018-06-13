<?php
?>

<html>
<head>
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>

            <div class="col-lg-6">
                <h1>Student Details</h1>
                <h4>Student_id: {{$student_number}}<br></h4>
                <h4>Full_name:  {{$full_name}}<br></h4>

                <h1>Fees Transaction</h1>
                    <table class="table table-hover">
                        <tr class="success">
                            <th>Student Number</th>
                            <th>Transaction Id</th>
                            <th>Date of Payment</th>
                            <th>Amount</th>
                        </tr>

                        @foreach ($student as $students)
                            <tr>
                                <td>{{$students->student_number}}</td>
                                <td>{{$students->payment_id}}</td>
                                <td>{{$students->date_paid}}</td>
                                <td>{{$students->amount_paid}}</td>
                            </tr>
                        @endforeach
                    </table>
            </div>
            <a href = "/"> <button class="btn btn-success">Go to homepage</button></a>

            <div class="col-lg-3"></div>
        </div>
    </div>

    
</body>
</html>
