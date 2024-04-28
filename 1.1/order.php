<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Замовлення</title>
</head>
<body>
    <h2>Ваше замовлення прийнято!</h2>
    <p>Замовлено виріб - <?php echo $_POST["sort"]; ?></p>
    <p>Матеріал - <?php echo $_POST["material"]; ?></p>
    <p>Кількість - <?php echo $_POST["amount"]; ?></p>
</body>
</html>