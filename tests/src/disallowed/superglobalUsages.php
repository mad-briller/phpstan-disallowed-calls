<?php
declare(strict_types = 1);

// phpcs:ignore Squiz.WhiteSpace.FunctionSpacing.Before
function useSuperglobals()
{
	// disallowed
	echo $GLOBALS['test'];
	echo $_GET['field'];

	// Assigning the global to another variable should also cause an error
	$fields = $_GET;
	$fields = $_POST;
}


function useNonGlobalVariable()
{
	$randomVar = 'foo';
	echo $randomVar;
}


function disallowedByPath()
{
	$foo = $_REQUEST;
}
