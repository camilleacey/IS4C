<?php
/*******************************************************************************

    Copyright 2001, 2004 Wedge Community Co-op

    This file is part of IS4C.

    IS4C is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    IS4C is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    in the file license.txt along with IS4C; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*********************************************************************************/
?>
<html>
<body onload="window.top.input.location = 'input.php';document.form.submit();" >
<?php
if (isset($_POST["selectlist"])) {
	$product = trim($_POST["selectlist"]);
} else {
	$product = "";
}
$_SESSION["strEntered"] = $product;

echo "<FORM name='form' method='post' autocomplete='off' action='pos2.php'>";
echo "<INPUT name='input' type='hidden' value='".$product."'>";
echo "</FORM>";
echo "</body></html>";
?>
