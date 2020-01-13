<?php

require_once('Git.php');

    $repo = Git::open('D:\xampp\htdocs\gggg\gittest');

    $branch = 'test'.time();
    $repo->add('.');
    $repo->commit('New commit '.time());
    $repo->push('origin', 'master');

        $repo->create_branch($branch);
        $repo->push('origin', $branch);

    print_r($repo);exit();

