<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Example</title>
</head>
<body>
    <?php
    // Exercise 1
    echo "<h2>EXERCISE 1</h2>";
    $a = 15;
    $b = 7;
    echo "Sum is " . ($a + $b) . "<br>";
    echo "Difference is " . ($a - $b) . "<br>";
    echo "Product is " . ($a * $b) . "<br>";
    echo "Quotient is " . ($a / $b) . "<br><br>";

    // Exercise 2
    echo "<h2>EXERCISE 2</h2>";
    function checkEvenOdd($number) {
        if ($number % 2 == 0) {
            echo "$number is even.<br>";
        } else {
            echo "$number is odd.<br>";
        }
    }
    checkEvenOdd(10); // Sample

    // Exercise 3
    echo "<h2>EXERCISE 3</h2>";
    echo "<h3>FizzBuzz</h3>";
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz<br>";
        } elseif ($i % 3 == 0) {
            echo "Fizz<br>";
        } elseif ($i % 5 == 0) {
            echo "Buzz<br>";
        }
    }

    echo "<h3>Fibonacci Even Numbers</h3>";
    function fibonacciEvenNumbers($n) {
        $a = 0;
        $b = 1;
        $count = 0;
        while ($count < $n) {
            $fib = $a + $b;
            $a = $b;
            $b = $fib;

            if ($fib % 2 == 0) {
                echo "$fib<br>";
                $count++;
            }
        }
    }
    fibonacciEvenNumbers(10); // Example usage

    // Exercise 4
    echo "<h2>EXERCISE 4</h2>";
    function greet($name) {
        return "Hello, $name!";
    }
    echo greet("Wonderland") . "<br>"; // Sample

    function square($num) {
        return $num * $num; // Corrected function to return square of num
    }
    echo square(5) . "<br>"; // Sample

    // Exercise 5
    echo "<h2>EXERCISE 5</h2>";
    if (isset($_POST['userText'])) {
        echo "You submitted: " . $_POST['userText'];
    } else {
        echo "No text submitted.";
    }

    // Form
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="userText" placeholder="Enter text">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
