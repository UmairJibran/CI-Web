<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Our Users</title>
</head>
<body>
   <?php foreach ($result as $user){echo $user->user_id."<br>";} ?>
</body>
</html>