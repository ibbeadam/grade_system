<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="content">
        <div class="head">
            <a href="index.php">&times</a><br>
            <h2>REPORT CARD</h2>
        </div>
        <?php
       
        $name=$_GET ['name'];
        $address=$_GET ['address'];
        $dhivehi=$_GET ['dhivehi'];
        $islam=$_GET ['islam'];
        $mathematics=$_GET ['mathematics'];
        $english=$_GET ['english'];
        $accounting=$_GET ['accounting'];
        $bstudies=$_GET ['bstudies'];
        $commerce=$_GET ['commerce'];
        $computer=$_GET ['computer'];
        $grade = "";


        $total = $dhivehi + $islam + $mathematics + $english + $accounting + $bstudies + $commerce
         + $computer;
        $average = round($total / 8);
        

        //Header of the card

        echo "<table>";
            echo "<tr>";
            echo "<td><h4>Name</td><td><h4> $name</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><h4>Address</td><td><h4> $address</td>";
            echo "</tr>";
        echo "</table>";

        //Center of the card

        echo "<table>";
            echo "<tr>";
            echo "<th><h3>Subject</th>";
            echo "<th><h3>Marks</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><h4>Dhivehi</td> <td><h4>$dhivehi</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><h4>Islam</td> <td><h4>$islam</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><h4>Mathematics</td> <td><h4>$mathematics</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><h4>English</td> <td><h4>$english</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><h4>Accounting</td> <td><h4>$accounting</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><h4>Business Studies</td> <td><h4>$bstudies</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><h4>Commerce</td> <td><h4>$commerce</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><h4>Computer Science</td> <td><h4>$computer</td>";
            echo "</tr>";
        echo "</table>";

        //Footer of the card

        echo "<table>";
            echo "<tr>";
            echo "<td><h4>Total Marks</td><td><h4> $total </td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><h4>Average Marks</td><td><h4> $average </td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo "<h4>Your grade is";
            echo "</td>";
            echo "<td>";

            if ( ( $average >= 85) && $average <=100) {

                echo  "<h4>A</h4>";

            }
            if ( ($average >=70) && $average <= 84) {
            
                echo "<h4>B</h4>";

            }
            if ( ($average >=65) && $average <= 69) {
            
                echo "<h4>C</h4>";

            }
            if ( ($average >=50) && $average <= 64) {
            
                echo "<h4>D</h4>";

            }
            if ( ($average >= 30) && $average <= 49) {
            
                echo "<h4>E</h4>";

            }
            if ($average <=30) {
            
                echo "<h4>F</h4>";

            }

        echo "</td>";    
        echo "</tr>";
        echo "</table>";
        ?>
    </div>


</body>
</html>