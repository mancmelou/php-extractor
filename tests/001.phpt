--TEST--
Test extractor_get_keywords() return value for a non existent file.
--DESCRIPTION--
This tests covers keyword extraction
for an empty file.
--FILE--
<?php
$test_filepath = '';

$keywords = extractor_get_keywords($test_filepath);
var_dump($keywords);

?>
--EXPECT--
array(0) {
}
--CREDITS--
Vladimir Ivic <vladimir.ivic@icloud.com>
