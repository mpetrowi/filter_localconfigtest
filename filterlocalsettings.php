<?php
class localconfigtest_filter_local_settings_form extends filter_local_settings_form {
    protected function definition_inner($mform) {
        $mform->addElement('text', 'append', 'What to append', array('size' => 20));
    }
}
?>