<?php
  $new_mail = $_REQUEST["email_unsub"];
  $new_mail = str_replace("@", "=", $new_mail);
  shell_exec("mail -s \"\" atari-coldfire-unsubscribe-$new_mail@acp-devel.org <<< \"\"");
  echo "Thank you for using the Atari ColdFire Mailinglist.";
  echo "Please have a look at your mailbox to confirm your unsubscription.";
?>