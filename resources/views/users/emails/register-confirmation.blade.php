<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap Link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .reg-name{
            font-family: Lucida sans-serif;
            font-size: 15px;
            color: rgb(107, 13, 13)
             
        }
    </style>
</head>
<body>
    <div>
        <p class="reg-name">Hello {{ $name }}</p>
        <p>Thank you for registering.</p>
        <p>To start, please access the website <a href="{{ $app_url }}">here.</a></p>
        <p>Thank you.</p>
    </div>
    
</body>
</html>