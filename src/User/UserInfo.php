<?php
namespace Concrete\Package\OverrideExample\Src\User;

class UserInfo extends \Concrete\Core\User\Event\UserInfo
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'UserInfo: ' . $this->getUserID() . $this->getUserName();
    }
}
