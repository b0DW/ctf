<?php
  print_r(array_diff(scandir("."), array('.', '..')));
  print(base64_encode(file_get_content("index.php")));
 ?>
