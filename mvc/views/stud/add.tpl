<?php include("views/header.tpl"); ?>
<form action="index.php?id=stud/save" id="form1" name="form1" method="post">
 <input type="hidden" name="sid" value="0" id="name">
  <table width="466" border="0" align="center">
    <tbody>
      <tr>
        <td width="112">نام دانشجو</td>
        <td width="344"><input type="text" name="name" id="name"></td>
      </tr>
      <tr>
        <td>معدل </td>
        <td><input type="text" name="avgr" id="avgr"></td>
      </tr>
      <tr>
        <td>رشته</td>
        <td><input type="text" name="fid" id="fid"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" id="submit" value="  ثبت تغییرات ">
        <input type="reset" name="reset" id="reset" value="  بازنویسی "></td>
      </tr>
    </tbody>
  </table>
</form>
<?php include("views/footer.tpl"); ?>
