<!DOCTYPE html>
<html>
<head>
    <title>Personal Information</title>
    <style>
        body {
            /* font-family: 'Poppins', sans-serif; */
            font-family: 'Hind siliguri', sans-serif;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .box {
            background-image: repeating-linear-gradient(135deg, rgba(0,0,0,0.04) 0px, rgba(0,0,0,0.04) 2px,transparent 2px, transparent 4px),linear-gradient(135deg, rgb(165, 230, 235),rgb(29, 32, 232));
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            color:white;
        }
        h1 {
            font-size: 24px;
        }
        p {
            font-size: 18px;
            font-family: 'tiro bangla', sans-serif;
        }
    </style>
</head>
<body>

<?php
$name = "জান্নাতুন্নাঈম সবুজ";
$age = "২৪";
$address = "যশোর, বাংলাদেশ";
$introduction = "আসলামুআলাইকুম, আমি $name. আমার বয়স $age বছর এবং আমার বাসা $address";
?>

<div class="box">
    <h1>পারসোনাল ইনফরমেশন</h1>
    <hr>
    <p>নাম: <?php echo $name; ?></p>
    <p>বয়স: <?php echo $age; ?></p>
    <p>ঠিকানা: <?php echo $address; ?></p>
    <p>কিছু তথ্য: <?php echo $introduction; ?></p>
</div>

</body>
</html>
