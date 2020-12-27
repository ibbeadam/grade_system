<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grading System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>Student Grading System</h1><hr><br>
            <div class="row">
    
                    <form name="markscheck" action="submit.php" onsubmit="return Checkform()" method="get">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your Name...">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" placeholder="Enter your Address..."><hr>
                        <label for="dhivehi">Dhivehi</label>
                        <input type="number" min="0" max="100" id="dhivehi" name="dhivehi" placeholder="Enter your Marks...">
                        <label for="islam">Islam</label>
                        <input type="number" min="0" max="100" id="islam" name="islam" placeholder="Enter your Marks...">
                        <label for="mathematics">Mathematics</label>
                        <input type="number" min="0" max="100" id="mathematics" name="mathematics" placeholder="Enter your Marks...">
                        <label for="english">English</label>
                        <input type="number" min="0" max="100" id="english" name="english" placeholder="Enter your Marks...">
                        <label for="accounting">Accounting</label>
                        <input type="number" min="0" max="100" id="accounting" name="accounting" placeholder="Enter your Marks...">
                        <label for="bstudies">Business Studies</label>
                        <input type="number" min="0" max="100" id="bstudies" name="bstudies" placeholder="Enter your Marks...">
                        <label for="commerce">Commerce</label>
                        <input type="number" min="0" max="100" id="commerce" name="commerce" placeholder="Enter your Marks...">
                        <label for="computer">Computer Science</label>
                        <input type="number" min="0" max="100" id="computer" name="computer" placeholder="Enter your Marks...">
                        <input id="btn" type="submit" value="Submit">
                    </form>

            </div>
    </div>
    
</body>

<script>
    function Checkform(){
        var name = document.forms["markscheck"]["name"];
        var address = document.forms["markscheck"]["address"];
        var dhivehi = document.forms["markscheck"]["dhivehi"];
        var islam = document.forms["markscheck"]["islam"];
        var maths = document.forms["markscheck"]["mathematics"];
        var english = document.forms["markscheck"]["english"];
        var accounting = document.forms["markscheck"]["accounting"];
        var b_studies = document.forms["markscheck"]["bstudies"];
        var commercer = document.forms["markscheck"]["commerce"];
        var computer = document.forms["markscheck"]["computer"];

        if (name.value == "") { 
            window.alert("Please enter your name."); 
            name.focus(); 
            return false; 
        }
        if (address.value == "") { 
            window.alert("Please enter your address."); 
            address.focus(); 
            return false; 
        }
        if (dhivehi.value == "") { 
            window.alert("Please enter your Marks."); 
            dhivehi.focus(); 
            return false; 
        }
        if (islam.value == "") { 
            window.alert("Please enter your Marks."); 
            islam.focus(); 
            return false; 
        }
        if (maths.value == "") { 
            window.alert("Please enter your Marks."); 
            maths.focus(); 
            return false; 
        }
        if (english.value == "") { 
            window.alert("Please enter your Marks."); 
            english.focus(); 
            return false; 
        }
        if (accounting.value == "") { 
            window.alert("Please enter your Marks."); 
            accounting.focus(); 
            return false; 
        }
        if (b_studies.value == "") { 
            window.alert("Please enter your Marks."); 
            b_studies.focus(); 
            return false; 
        }
        if (commercer.value == "") { 
            window.alert("Please enter your Marks."); 
            commercer.focus(); 
            return false; 
        }
        if (computer.value == "") { 
            window.alert("Please enter your Marks."); 
            computer.focus(); 
            return false; 
        }
        return true;

    }
</script>

</html>