<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
    <h1><?php
        // Include the interface and class files
        require_once 'src/HelloInterface.php';
        require_once 'src/Hello.php';

        // If using namespaces, uncomment the following line
        use Silarhi\Hello;

        // Create an instance of the Hello class
        $hello = new Hello();

        // Display the result
        echo $hello->display();
       ?>
</h1>
</body>
</html>
