<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Passwordhashing
{
    public function CreatePasswordHash($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public function VerifyPasswordHash($password, $hashedPassword)
    {
        if (password_verify($password, $hashedPassword)) {
            return true;
        } else {
            return false;
        }
    }
}
