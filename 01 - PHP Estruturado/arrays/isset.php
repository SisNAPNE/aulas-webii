<?php

	$arr;

	if(isset($arr)) { echo "O Array FOI definido!<br>"; }
	else { echo "O Array NÃO FOI definido!<br>"; }

	$arr = null;

	if(isset($arr)) { echo "O Array FOI definido!<br>"; }
	else { echo "O Array NÃO FOI definido!<br>"; }

	$arr = array();

	if(isset($arr)) { echo "O Array FOI definido!"; }
	else { echo "O Array NÃO FOI definido!"; }
