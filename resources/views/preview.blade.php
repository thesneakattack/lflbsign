<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LFLB Sign Preview</title>
    <script>
        window.addEventListener("load", () => {
            console.log('loaded');
        document.body.style.transform = 'scale(0.5)';
        document.body.style.transformOrigin = 'top center';
});
    </script>
</head>

<body style="background-color:#333;max-height:960px;margin:0;">
    <div>
        <iframe src="/{{$requested_url}}" frameborder="2" width="1080" height="1920"
            style="display:block; width:1080px; margin:0px auto;"></iframe>
    </div>
</body>

</html>
