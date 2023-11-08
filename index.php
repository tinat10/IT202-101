<html> <!-- this is the usual format of HTML -->
    <head>
        <title>My class website</title> <!-- name of website in the tab heading-->
        <meta>IT202 class</meta>

        <script> //javascript starts!
            console.log("sample javascript")
            var a = 1+2;

            function myFunction() {
                document.getElementById("test").innerHTML = "updated";
                window.alert("hooooo");
            }
        </script> <!-- javascript ends -->
        <link rel="stylesheet" href="demo.css"></link>
    </head>
    <body>
        <button onclick="myFunction">tryMe</button>
        <p id="test"></p>
        <p>test code</p>
        <form method="post">
            search: <input type="text" name ="name">
            <input type = "text" name="second" >
            <input type = "submit" onclick="myFunction()">

            password: <input type = "password">
        </form>
        <?php  
        if (isset($_POST["name"])) // isset checks if its null or not
            echo $_POST["name"];
        
        ?>

<button onclick="alert('alert box')">Alert Popup </button>

<h1>Yes, this is a website. calm yourself.</h1>
<hr>  <!--this creates the horizontal line -->

<h2>i'm tired...</h2>
<h3>okay, i get it</h3>

<button>this is a button</button>

<br> <!-- creates a space between the lines --> 

<hr> <!--this creates the horizontal line -->

<a href="https://www.youtube.com">Youtube Website</a> <!-- must include https:// -->
<a href="HW2.problem1.php">Homework 1</a> <!-- must include https:// -->

<img src="https://t0.gstatic.com/licensed-image?q=tbn:ANd9GcSRA1VvVWshDqdk-IbClyNwWoUAjMnFQ5KQLb8eH0hu4gCCvfvqMEcQqOF-CTro2maW"></img>

<p>This <strong>is a </strong>paragraph.</p> <!-- strong = bold | <p> = paragraph -->



    </body>


</html>

<?php
# in this language, you must start a variable with a '$'
# echo is php's print()
echo "test\n";
$test2 = "test2\n";
$math = 5+3;
echo $test2;
echo $math;

if ($math == 8) {
    echo "variable value is 8";
}

?>



