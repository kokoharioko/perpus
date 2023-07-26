<form action="proseseditstok.php" method="post">
<table>
    <tr>
        <td> Nama buku </td>
        <td>:</td>
        <td><input type="text" name="nmbuku" id="Nama buku" value="<?php echo $_GET['nbuku']; ?>" readonly/></td>
    </tr>
    <tr>
        <td> Stok Tersedia </td>
        <td>:</td>
        <td><input type="text" name="stktersedia" id="Tersedia" value="<?php echo $_GET['stkter']; ?>" required/></td>
    </tr>

    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="submit" value="Edit"/></td>
    </tr>
</table>
</form>