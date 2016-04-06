<html><head></head>
<body>
<?
session_start();
if($_SESSION['user']==''){
    header("Location:login.php");
}else{
    $dbh=new PDO('mysql:dbname=quizsystemdatabase;host=127.0.0.1', 'root', 'backstreetboys');
    $sql=$dbh->prepare("SELECT * FROM users WHERE id=?");
    $sql->execute(array($_SESSION['user']));
    while($r=$sql->fetch()){
        echo "<center><h2>Hello, ".$r['username']."</h2></center>";
    }
}
?>
</body>
</html>