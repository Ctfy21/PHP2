<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab2</title>
</head>
<body>
    <main>
        <textarea name="123" id="123" cols="30" rows="40">
            <?php 
                $url = "https://httpbin.org/post";
                print_r(get_headers($url));
            ?>
        </textarea>
    </main>
</body>
</html>