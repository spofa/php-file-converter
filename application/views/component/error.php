<h1><?php echo $this->lang->line("error_title") ?></h1>
<?php
if (isset($message)) {
    echo "<p class='message'>".$message."</p>";
}
?>
<p class='message'><img src="<?php echo base_url("images/no_entry.png"); ?>" /></p>
<p class='message'><a href="<?php echo base_url(); ?>">Return to homepage</a></p>