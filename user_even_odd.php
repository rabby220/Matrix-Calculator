<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .sub{
            color: red;
            overflow:hidden;
            margin-top:13px;
            margin-left: 280px;
            /* cursor: pointer; */
            /* display:inline-block; */
            
        }
        .reslt
        {
           
            margin-left: 153px;
            overflow:hidden;
            position:fixed;
    </style>
</head>
<body>
    
     <?php

            /*  $number = $_POST['odd_even'];
            $resultt = $_POST['result'];
            $check = $_POST['submitt']; */

            if($_POST ){
                $odd_even = $_POST['odd_even'];

                if((odd_even % 2 ) == 0)
                {
                    echo "$odd_even even";

                }
                else
                
                { 
                    echo " $odd_even Odd Number";
                }
            }
    ?> 

    <form method = "POST">

    <h3><b><marquee>Enter your any number and check it odd or even number: </marquee></b></h3>

    <label> Enter Your any Number:</label>
    <input type="number" name = "odd_even" ><br> <br>

    <label> Result:</label>
    <input class = "reslt" name = "result"> <br>

    <input class = "sub" type="Submit"  value = "Check" name = "submitt" > 
    


    </form>



</body>
</html>