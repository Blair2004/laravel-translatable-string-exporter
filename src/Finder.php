<?php

namespace KKomelin\TranslatableStringExtractor;

class Finder
{
    /**
     * Directories to search in.
     *
     * @var array
     */
    protected $directories = [
        'app',
        'resources',
    ];

    /**
     * File patterns to search for.
     *
     * @var array
     */
    protected $patterns = [
        '*.php',
        '*.js',
    ];

    /**
     * Finder constructor.
     */
    public function __construct()
    {

    }

    /**
     * Find all files that can contain translatable strings.
     *
     * @return \Symfony\Component\Finder\Finder|null
     */
    public function find()
    {
        $path = base_path();

        $directories = $this->directories;
        array_walk($directories, function (&$item) use($path) {
            $item = $path . DIRECTORY_SEPARATOR . $item;
        });

        $pattern_string = implode('|', $this->patterns);

        $finder = new \Symfony\Component\Finder\Finder();

        return $finder->in($directories)
            ->name($pattern_string)
            ->files();
    }
}
