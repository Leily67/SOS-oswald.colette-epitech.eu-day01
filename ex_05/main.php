<?php

//main.php

require("my_calc.php");

echo my_calc(40, "*", 2);
echo my_calc(40, "/", 0);
echo my_calc(20, "%", 0);
echo my_calc(20, "a", 0);