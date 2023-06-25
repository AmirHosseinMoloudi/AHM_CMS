<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class MyBB extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * MyBB Forum ID
     * --------------------------------------------------------------------------
     *
     * Code for the Blog forum in our MyBB
     */
    public $BlogForumId = 2;

    /**
     * --------------------------------------------------------------------------
     * MyBB Usernames
     * --------------------------------------------------------------------------
     *
     * An array of user names to restrict our search for Blog articles to.
     * This simply helps limit the work to do.
     */
    public $BlogUsernames = ['admin', 'ahm'];

    /**
     * --------------------------------------------------------------------------
     * MyBB Forum URL
     * --------------------------------------------------------------------------
     *
     * The link to direct visitors to for our forum
     */
    public $forumURL = 'https://forum.codeigniter.com';
}
