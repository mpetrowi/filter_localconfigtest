<?php

if ($ADMIN->fulltree) {

    $settings->add(new admin_setting_configtext('filter_localconfigtest_append', 'What to append, default',
                   '', 'default'));
}