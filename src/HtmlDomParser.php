<?php
namespace tekintian\phphtmlparser;

require 'lib' . DIRECTORY_SEPARATOR . 'php_html_dom.php';

class HtmlDomParser {

	static public function file_get_html() {
		return call_user_func_array('\php_html_dom\file_get_html', func_get_args());
	}

	static public function str_get_html() {
		return call_user_func_array('\php_html_dom\str_get_html', func_get_args());
	}
}