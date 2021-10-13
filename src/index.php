<?php





echo "<form action='mail.handeler.php' method='post'>";
       echo "<label for='name'>Name</label>";
       echo "<input type='text' name='name' placeholder='Voer hier uw naam in...' required><br>";
       echo  "<label for='email'>Email</label>";
       echo  "<input type='email' name='email' placeholder='Voer hier uw email in...' required><br>";
       echo    "<label for='message'>Message</label><br>";
       echo    "<textarea name='msg' placeholder='Plaats uw bericht hier...' required></textarea><br>";
       echo     "<input type='submit' name='submit' value='Send'>";
echo"</form>";



