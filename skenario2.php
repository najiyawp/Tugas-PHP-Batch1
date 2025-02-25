<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Waktu</title>
</head>

<body>
    <h1>Menentukan waktu</h1>
    <form method="post">
        <label for="jam">Masukkan Jam (HH:MM)</label>
        <input type="text" id="jam" name="jam" required>
        <button type="submit">Cek waktu</button>
    </form>    

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jam = $_POST['jam'];

        if ($jam >= "00:00" && $jam < "04:00") {
            echo "<p>$jam = Dini hari</p>";
        } elseif ($jam >= "04:00" && $jam < "10:00") {
            echo "<p>$jam = Pagi hari</p>";
        } elseif ($jam >= "10:00" && $jam < "15:00") {
            echo "<p>$jam = Siang hari</p>";
        } elseif ($jam >= "15:00" && $jam < "17:30") {
            echo "<p>$jam = Sore hari</p>";
        } elseif ($jam >= "17:30" && $jam < "18:30") {
            echo "<p>$jam = Petang</p>";
        } elseif ($jam >= "18:30" && $jam < "24:00") {
            echo "<p>$jam = Malam hari</p>";
        } else {
            echo "<p>Dunia lain</p>";
        }
    }
    ?>

</body>
</html>