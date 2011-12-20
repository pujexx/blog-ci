<?php
echo form_open("admin/newpost");
echo "<p>Judul : ".form_input("judul")."</p>";
echo "<p>Isi</p>";
echo form_textarea("isi");
echo "<br>";
echo form_submit("publish","Publish");
echo form_reset("reset","Reset");
echo form_close();


?>
