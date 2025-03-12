<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Example</title>
</head>
<body>
<?php
    <h2>EXERCISE 1</h2>
    $a = 15
    $b = 7
    echo "Sum is ". $a + $b . "\n";
    echo "Difference is ". $a - $b . "\n";
    echo "Product is ". $a * $b . "\n";
    echo "Quotient is ". $a / $b . "\n";
    
    <h2>EXERCISE 2</h2>
    function checkEVENODD($number){
    if ($number %2 == 0) {
        echo "$numnber is even.\n";} 
    else {
        echo "$number is odd.\n";}
    }
    checkEVENODD(10); //sample
    
    <h2>EXERCISE 3</h2>
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz\n"; }
        elseif ($i % 3 == 0) {
            echo "Fizz\n"; }
        elseif ($i % 5 == 0) {
            echo "Buzz\n";}
    }
    function fibonacciEvenNumbers($n) {
        $a = 0;
        $b = 1;
        $count = 0; 
        while ($count < $n) {
            $fib = $a + $b;
            $a = $b;
            $b = $fib;
            
            if ($fib % 2 == 0) {
                echo "$fib\n";
                $count++;
            }
        }
    }
    
    <h2>EXERCISE 4</h2>
    function greet($name) {
        return "Hello, $name!";
    }
    echo greet("Wonderland") . "\n"; //sample
    
    function square($num) {
        return $num = $num;
    }
    echo square(5) . "\n";//sample

    <h2>EXERCISE 5</h2>
    if (isset($_POST['userText'])) {
        echo "You submitted: " . $_POST['userText']; }
    else {
        echo "No text submitted.";}
    
?>
    <form action="process.php" method="post">
        <input type="text" name="userText" placeholder="Enter text">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
