<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>
        Es gibt eine neue nachricht vom Kontaktformular.
        Folgende Daten wurde übertragen:
    </p>
   
     <p>
     <b>Name: </b><?php echo $_GET["vn_name"]; ?><br>
     <b>Mail: </b><?php echo $_GET["mail"]; ?><br>
     <b>Kommentar: </b><?php echo $_GET["kommentar"]; ?><br>
     </p>

</body>
</html>