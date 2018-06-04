<?php

if ($rating='1'){
  echo "<i class="icon-star-full"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i><i class="icon-star-empty">";
}
else if($rating='2'){
  echo "<i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i><i class="icon-star-empty">";
}
else if ($rating='3'){
  echo "<i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-empty"></i><i class="icon-star-empty">";
}
else if ($rating='4'){
  echo "<i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-empty">";
}
else{
  echo "<i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full">";
}
?>
