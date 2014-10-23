<?php

class Lorem {

	private $number;

	private $path;



	public function setPath($path) {
		$this->path = $path;
	}

	public function getPath() {
		return $this->path;
	}

	public function getParagraphs($number) {
		$generator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs($number);
		echo implode('<p>', $paragraphs);
	}





}