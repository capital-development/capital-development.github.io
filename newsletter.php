<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h1 {
            font-family: arial, sans-serif;
        }
        a {
            color: white;
            text-decoration: none;
        }
        button {
            font-size: 20px;
            padding: 10px;
            background-color: green;
            border: none;
            border-radius: 5px;
        }
    </style>
    <title>Newsletter send</title>
</head>
<body>
<script type="php>
    $email = $_POST["EMAIL"];
    mail("business.capitalstudio@gmail.com", "New Newsletter-User", $email, "From Website Devs <contact.capitalstudio@gmail.com>");
</script>
<h1>You have been subscribed to the newsletter!</h1>
<button><a href="index.php">Go Back</a></button>
</body>
</html>
