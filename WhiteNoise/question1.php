<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Exercise</title>
</head>
<body>

    <form action="question1.php" method="post">
        What is the main difference between JS and PHP?
        </br>
        <textarea rows="5" cols="20" name="ans1">
        </textarea>
        <input type="submit" /> <!--automatically grabs the data from form and put in request, dont need onclick JS-->
        <input type="submit" value="submit answer" name="btn" />
    </form>

<?php
$answer1= null;
if ($_SERVER['REQUEST_METHOD'] == "POST: )
{
    if (empty($_POST['ans1'}})
        eecho "Please answer <br/>";
    else{
        $answer1 = $_POST['ans1'];
        echo $answer1;
    }
}
    
$next_page = 'question2.php';
    echo "<a href = $next_page > Next question </a>";
?>

</body>
</html>