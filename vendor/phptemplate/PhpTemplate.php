<?php
class PhpTemplate {
	protected $path;
	protected $charset;

	public function __construct($path, $charset = 'UTF-8') {
		$this->path = $path;
		$this->charset = $charset;
	}

	public function render($file, $data = null) {
		if ($data) {
			extract($data);
		}
		ob_start();
		ob_implicit_flush(false);
		require $this->path.'/'.$file;

		return ob_get_clean();
	}

	public function escape($string) {
		return htmlspecialchars($string, ENT_QUOTES, $this->charset);
	} 
}
?>