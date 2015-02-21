<?php
/**
 * User: tony
 * Date: 2/21/15
 * Time: 2:53 PM
 */
class core
{
    public function CreateAccount($name)
    {

    }

    public function userExists($name)
    {
        $qr = shell_exec(sprintf('id -u %s',$name));

        if (strpos($qr, 'no'))
        {
            echo 'nothing found';
        }
        else
        {
            echo 'found something';
        }
    }
}
$usr = 'aafetsrom';
$obj = new core();
$obj->userExists($usr);