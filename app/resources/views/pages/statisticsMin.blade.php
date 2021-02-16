<!DOCTYPE html>
<html>
<head>
    <title>Minute Statistics</title>
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style type="text/css">
        .form-style-6{
            font: 95% Arial, Helvetica, sans-serif;
            max-width: 400px;
            margin: 10px auto;
            padding: 16px;
            background: #F7F7F7;

        }
        .form-style-6 h1{
            background: #a8802a;
            padding: 20px 0;
            font-size: 140%;
            font-weight: 300;
            text-align: center;
            color: #fff;
            margin: -16px -16px 16px -16px;


        }
        .form-style-6 input[type="text"],
        .form-style-6 input[type="date"],
        .form-style-6 input[type="datetime"],
        .form-style-6 input[type="email"],
        .form-style-6 input[type="number"],
        .form-style-6 input[type="search"],
        .form-style-6 input[type="time"],
        .form-style-6 input[type="url"],
        .form-style-6 textarea,
        .form-style-6 select
        {
            -webkit-transition: all 0.30s ease-in-out;
            -moz-transition: all 0.30s ease-in-out;
            -ms-transition: all 0.30s ease-in-out;
            -o-transition: all 0.30s ease-in-out;
            outline: none;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            width: 100%;
            background: #fff;
            margin-bottom: 4%;
            border: 1px solid #ccc;
            padding: 3%;
            color: #555;
            font: 95% Arial, Helvetica, sans-serif;

        }
        .form-style-6 input[type="text"]:focus,
        .form-style-6 input[type="date"]:focus,
        .form-style-6 input[type="datetime"]:focus,
        .form-style-6 input[type="email"]:focus,
        .form-style-6 input[type="number"]:focus,
        .form-style-6 input[type="search"]:focus,
        .form-style-6 input[type="time"]:focus,
        .form-style-6 input[type="url"]:focus,
        .form-style-6 textarea:focus,
        .form-style-6 select:focus
        {
            box-shadow: 0 0 5px #d1c544;
            padding: 3%;
            border: 1px solid #d1c433;

        }

        .form-style-6 input[type="submit"],
        .form-style-6 input[type="button"]{
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            width: 100%;
            padding: 3%;
            background: #9c7119;
            border-bottom: 2px solid #c2ae45;
            border-top-style: none;
            border-right-style: none;
            border-left-style: none;
            color: #fff;

        }
        .form-style-6 input[type="submit"]:hover,
        .form-style-6 input[type="button"]:hover{
            background: #bc9953;

        }
        body{
            background-size: 100%;
            margin-top: 15%;
        }
    </style>
</head>

<body background="../images/map2.jpg">
<div></div>
<div class="form-style-6">
    <h1>Find statistics in minutes</h1>
    <form method="GET" action="http://localhost:8000/carriers/statistics/minutes_delayed">

        <input type="text" name="airport_code" placeholder="Airport" />
        <input type="text" name="month" placeholder="Month" />
        <input type="text" name="year" placeholder="Year" />

        <p>Pick reason:</p>
        <input type="checkbox" name="reasons[]" value="late_aircraft"> Late aircraft
        <input type="checkbox" name="reasons[]" value="carrier" checked> Carrier
        <input type="checkbox" name="reasons[]" value="total"> Total<br><br>


        <input type="submit" value="Find" />
    </form>
</div>


</body>
</html>