<!DOCTYPE html>
<html>
<head>
    <title>Form Pengisian Data</title>
</head>
<body>
    <h1>Form Pengisian Data</h1>
    <form action="/submit-form" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br><br>
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim"><br><br>
        <label for="kelas">Kelas:</label><br>
        <input type="text" id="kelas" name="kelas"><br><br>
        <label for="mata_kuliah">Mata Kuliah:</label><br>
        <input type="text" id="mata_kuliah" name="mata_kuliah"><br><br>
        <label for="dosen_pengampu">Dosen Pengampu:</label><br>
        <input type="text" id="dosen_pengampu" name="dosen_pengampu"><br><br>
        <label for="asisten_praktikum">Asisten Praktikum:</label><br>
        <input type="text" id="asisten_praktikum" name="asisten_praktikum"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
