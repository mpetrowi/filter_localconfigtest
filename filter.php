<?php

/**
 * This filter appends a configured string to the end of every string.  Its
 * purpose is to test the filter local configurations
 *
 * @author Matt Petro
 *
 */

class filter_localconfigtest extends moodle_text_filter {
    public function filter($text, array $options = array()) {
        global $CFG;
        $appendage = isset($this->localconfig['append'])? $this->localconfig['append'] : $CFG->filter_localconfigtest_append;
        return "$text ($appendage)";
    }
}