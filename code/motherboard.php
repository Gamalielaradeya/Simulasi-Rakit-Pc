<?php
    require_once "../asset/konek/konek.php";
    $socket_id = $_POST["socket_id"];
    $result = mysqli_query($connect, "SELECT * FROM motherboard where socket_id = $socket_id");
?>

<option value="">Pilih Motherboard</option>

<?php
    while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["harga"];?>"><?php echo $row["nama"];?></option>
<?php
    }
?>