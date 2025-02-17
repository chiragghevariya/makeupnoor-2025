<?php

//toster
function flashMessage($type,$message)
{
	\Session::put($type,$message);
}
?>
