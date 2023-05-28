<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /* width: 100%; */
            height: 1000px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: goldenrod;
        }
        form{
            display: flex;
            flex-direction: column;
            background-color: blueviolet;
            padding: 20px;
            border-radius: 10px;
            color: white ;
            width: 300px;
            text-transform: capitalize;
        }
        .input{
            height: 30px;
            background-color: transparent;
            outline: none;
            border: none;
            border-bottom: 2px white solid;
            margin-bottom: 10px;
        }
        input::placeholder{
            color: rgb(173, 160, 160);
        }
        #button{
            padding: 10px;
            margin: 10px;
            background-color: greenyellow;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }
        #button:hover{
            background-color: rgb(52, 207, 52);
            border-radius: 10px;
        }
        .thanks{
            transform: scaleX(0);
        }
        .thanks.active{
            transform: scaleX(1);
        }

    </style>
</head>
<body>
    <h2>Enter your information</h2>
    <form action="" method="post">
        <label for="">name</label>
        <input class="input" type="text" name="name" id="" placeholder="type here">
        <label for="">lastname</label>
        <input class="input" type="text" name="lastname" id=""placeholder="type here">
        <label for="">collge name</label>
        <input class="input" type="text" name="collge-name" id=""placeholder="type here">
        <label for="">roll no</label>
        <input class="input" type="numbers" name="roll-no" id=""placeholder="type here">
        <label for="">contact</label>
        <input class="input" type="numbers" name="contact" id=""placeholder="type here">

        <input type="submit" name="btn-submit" id="button">
    </form>
    <div class="thanks" id="thanks">
        <h2>Thanks for giving your time</h2>
    </div>
    <script>
        const button = document.getElementById('button');
        const thanks = document.getElementById('thanks');
        

        button.addEventListener('click', () => {
            thanks.classList.add('active'); /* Toggle active class */
        });
    </script>
</body>
</html>
<?php
if(isset($_POST['btn-submit'])){
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $collge = $_POST['collge-name'];
    $rollno = $_POST['roll-no'];
    $contact = $_POST['contact'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'collge_data';

    $conn = mysqli_connect($host, $user , $pass, $dbname);

    $query = "INSERT INTO student_data(name, lastname, collge_name, roll_no, contact) values('$name', '$lastname','$collge','$rollno', '$contact')";
    $data = mysqli_query($conn,$query);
    
}  
?>