
<html>  
<body>  
<form method="post">  
Enter First Number:  
<input type="number" name="number1" /><br><br>  
Enter Second Number:  
<input type="number" name="number2" /><br><br>  
<input  type="submit" name="submit" value="Add">  
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  
        $sum =  $number1+$number2;     
        $difference =  $number1-$number2;   
        $multi =  $number1*$number2;
        echo "The sum of $number1 and $number2 is: ".$sum;
        echo "The difference of $number1 and $number2 is: ".$difference;   
        echo "The product of $number1 and $number2 is: ".$multi;
    }  
?>  
</body>  
</html>
