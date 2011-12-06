<?php echo form_open("login/index");?>
<p>Username : <?php echo form_input("username");?></p>
<p>Password : <?php echo form_password("password");?></p>
<p><?php echo form_submit("login","Login");?></p>
<?php echo form_close();?>