<?php

namespace KKomelin\TranslatableStringExporter\Core;

class Extractor
{
    private $finder;
    private $parser;

    public function __construct()
    {
        $this->finder = new Finder();
        $this->parser = new Parser();
    }

    /**
     * Extract translatable strings from the project files.
     */
    public function extract() {

        $strings = [];

        $files = $this->finder->find();
        foreach ($files as $file) {
            $strings = array_merge($strings, $this->parser->parse($file));
        }

        return $strings;
    }
}
