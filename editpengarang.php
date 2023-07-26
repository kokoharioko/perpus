<form action="proseseditpengarang.php" method="post">
<table>
    <tr>
        <td> Id pengarang </td>
        <td>:</td>
        <td><input type="text" name="idpeng" id="Id pengarang" value="<?php echo $_GET['idprg']; ?>" readonly/></td>
    </tr>
    <tr>
        <td> Nama Pengarang </td>
        <td>:</td>
        <td><input type="text" name="nmpeng" id="Nama pengarang" value="<?php echo $_GET['nmprg']; ?>" required/></td>
    </tr>

    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="submit" value="Edit"/></td>
    </tr>
</table>
</form>