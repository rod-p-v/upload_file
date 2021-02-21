<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Upload File</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <h2>Upload file</h2>
            <input type="file" name="file">
                <p><input type="submit" value="Upload file"></p>
    </form>
</body>
</html>