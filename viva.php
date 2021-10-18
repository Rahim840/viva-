<!DOCTYPE html>
<html long ="en">
<head>
    <title>Calculator</title>
 <style>
        .level{
            font-size: 20px;
            font-weight: bold;
             margin-left: 90px;
        }
        .abc{
            height: 25px;
            width: 45px;
            background: blue;
            color: white;
            font-size: 18px;
            
        }
    </style>
   
</head>
<body>

<?php
$oper=$num1=$num2=$num3=$num4=$num5=$num6=$num7=$num8="";

if(isset($_POST["operator"])){
   $oper = $_POST["operator"];
   $num1 = $_POST["List1"];
   $num2 = $_POST["List2"];
   $num3 = $_POST["List3"];
   $num4 = $_POST["List4"];
   $num5 = $_POST["List5"];
   $num6 = $_POST["List6"];
   $num7 = $_POST["List7"];
   $num8 = $_POST["List8"];

   $matrixA = array(
       array($num1,$num2),
       array($num3,$num4)
   );
   $matrixB = array(
    array($num5,$num6),
    array($num7,$num8)
    );

    $sum = array();
    $multi = array(
                 array(0,0),
                 array(0,0)
             );

 // Addition of Mattrix
        if($oper=="Add"){
        for($row=0; $row<count($matrixA); $row++){
            $colLength = count($matrixA[$row]);
            for($col=0; $col<$colLength; $col++){
                array_push($sum,$matrixA[$row][$col]+$matrixB[$row][$col]);
            }
        
            
        }
    }
// Summation of Mattrix
    if($oper=="Sub"){
        $sum = array();
        for($row=0; $row<count($matrixA); $row++){
            $colLength = count($matrixA[$row]);
            for($col=0; $col<$colLength; $col++){
                array_push($sum,$matrixA[$row][$col]-$matrixB[$row][$col]);
            }
        
            
        }
    }

// Multiplication of Mattrix
    if($oper=="Multi"){
        $sum = array();
        for($row=0; $row<count($matrixA); $row++){
            $colLength = count($matrixA[$row]);
            for($col=0; $col<$colLength; $col++){
                for($i=0; $i<2; $i++){
                    $multi[$row][$col] = $multi[$row][$col]+ $matrixA[$row][$i]*$matrixB[$i][$col];

                }
                    }
        
            
        }
    }


}

?>



    <h1 align="center">Assignment-5</h1>
    
     <form action="" method="POST">

  <!-- Input Number For Matrix -->
            <label for="num1" class="level">Input 2*2 Matrix A</label>
            <input type="number" name="List1" value="<?php echo $num1 ?>" required>
            
            <label for="num1"></label>
            <input type="number" name="List2" value="<?php echo $num2 ?>" required>
            
            <label for="num1"></label>
            <input type="number" name="List3" value="<?php echo $num3 ?>" required>
            
            <label for="num1"></label>
            <input type="number" name="List4" value="<?php echo $num4 ?>"  required><br>
            
            <label class="level" for="num1">Input 2*2 Matrix B </label>
            <input type="number" name="List5" value="<?php echo $num5 ?>" required>
            
            <label for="num1"></label>
            <input type="number" name="List6" value="<?php echo $num6 ?>" required>
            
            <label for="num1"></label>
            <input type="number" name="List7" value="<?php echo $num7 ?>" required>
            
            <label for="num1"></label>
            <input type="number" name="List8" value="<?php echo $num8 ?>" required><br><br>
    <!-- These 3 Input Type For Submit -->
            <input class="abc" style="margin-left: 106px;" type="submit" value="Add" name="operator">
            <input class="abc" type="submit" value="Sub" name="operator">
            <input class="abc" type="submit" value="Multi" name="operator"><br>
  <!-- 4 Input Type For Result -->
           <br>  <label for="num1" class="level">Your Result is here</label>
            <input type="number" name="num1"
            
            value="<?php 
            if(isset($oper) and $oper=="Multi"){
                echo $multi[0][0];
             }
             else{
                 echo $sum[0];
             }
            ?>" readonly>

            
            <label for="num1"></label>
            <input type="number" name="num1" 
            value="<?php 
                if(isset($oper) and $oper=="Multi"){
                echo $multi[0][1];
             }
             else{
                 echo $sum[1];
             }
            ?>" readonly>
            
            <label for="num1"></label>
            <input type="number" name="num1" value="<?php 
            
            if(isset($oper) and $oper=="Multi"){
                echo $multi[1][0];
             }
             else{
                 echo $sum[2];
             }
            
            
            ?>" readonly>
            
            <label for="num1"></label>
            <input type="number" name="num1" value="<?php 
            
            if(isset($oper) and $oper=="Multi"){
                echo $multi[1][1];
             }
             else{
                 echo $sum[3];
             }
            
            
            ?>" readonly><br>
            

        </form>
    </body>
</html>
	

	