<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="fontconvert.js"></script>

</head>
<body>
    <div class="w">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, adipisci. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus consequuntur eligendi necessitatibus perspiciatis autem eaque explicabo, in beatae vel mollitia quis eos animi sunt consectetur corporis doloremque quisquam. At quod in porro eum amet esse corrupti! Ipsum dolores placeat est?</div>
    <script>
        converter('.w',40);       
        window.addEventListener('resize', function (event) {
          converter('.w',40);
        });
    </script>
</body>
</html>
