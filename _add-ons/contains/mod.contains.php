<?php
/**
 * Modifier_contains
 * Checks to see if a value exists in a string
 *
 * @author  Erin Dalzell
 */
class Modifier_contains extends Modifier
{
    public function index($value, $parameters=array())
    {
		return (isset($parameters[0]) && stripos($value, $parameters[0]) !== FALSE);
    }
}