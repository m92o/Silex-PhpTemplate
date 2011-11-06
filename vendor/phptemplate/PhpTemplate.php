<?php
class PhpTemplate {
	private $path;

	function __construct($path) {
		$this->path = $path;
	}

	function render($file, $data = null) {
		ob_start();
		include $this->path.$file;
		$html = ob_get_contents();
		ob_end_clean();

		return $html;
	}
}
?>