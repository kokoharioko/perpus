<form action="proseseditpenjualan.php" method="post">
<table>
    <tr>
        <td> Id buku </td>
        <td>:</td>
        <td><input type="text" name="idbuku" id="Id buku" value="<?php echo $_GET['idbuku']; ?>" readonly/></td>
    </tr>
    <tr>
        <td> Harga </td>
        <td>:</td>
        <td><input type="text" name="harga" id="Harga" value="<?php echo $_GET['hrga']; ?>" required/></td>
    </tr>
    <tr>
        <td> Jumlah terjual </td>
        <td>:</td>
        <td><input type="text" name="jumlah" id="Jumlah terjual" value="<?php echo $_GET['jlhjual']; ?>" required/></td>
    </tr>
    <tr>
        <td> Total </td>
        <td>:</td>
        <td><input type="text" name="total" id="Total" value="<?php echo $_GET['ttal']; ?>" required/></td>
    </tr>

    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="submit" value="Edit"/></td>
    </tr>
</table>
</form>