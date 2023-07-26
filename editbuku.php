<form action="proseseditbuku.php" method="post">
<table>
    <tr>
        <td> Id Buku </td>
        <td>:</td>
        <td><input type="text" name="idbuku" id="Id buku" value="<?php echo $_GET['idbk']; ?>" readonly/></td>
    </tr>
    <tr>
        <td> nama </td>
        <td>:</td>
        <td><input type="text" name="namabuku" id="Nama buku" value="<?php echo $_GET['nmbk']; ?>" required/></td>
    </tr>
        <tr>
        <td> Penerbit </td>
        <td>:</td>
        <td><input type="text" name="penerbit" id="Nama buku" value="<?php echo $_GET['pnrbt']; ?>" required/></td>
    </tr>
    <tr>
        <td> pengarang </td>
        <td>:</td>
        <td><input type="text" name="pengrg" id="pengarang" value="<?php echo $_GET['pngrg']; ?>" required/></td>
    </tr>
    <tr>
        <td> harga </td>
        <td>:</td>
        <td><input type="text" name="harga" id="Harga buku" value="<?php echo $_GET['hrgbk']; ?>" required/></td>
    </tr>

    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="submit" value="Edit"/></td>
    </tr>
</table>
</form>