<?php

namespace App\Services;

use Illuminate\Filesystem\Filesystem;

class FileHandler
{
    private Filesystem $files;

    public function __construct(Filesystem $files)
    {
        $this->files = $files;
    }

    /**
     * Replace a given string within a given file.
     *
     * @param  string  $patth
     * @param  mixed  $content
     */
    public function createFile(string $path, ...$content)
    {
        $this->files->put($path, $content);
    }

    /**
     * Replace a given string within a given file.
     *
     * @param  string  $search
     * @param  string  $replace
     * @param  string  $path
     * @return array|string replaced, untouched content
     */
    public function replaceInFile($search, $replace, $path)
    {
        return str_replace(self::scopeTo('$', $search), $replace, self::readFile($path));
    }

    /**
     * Encapsulate value in a given delimiter
     *
     * @param  string  $value
     * @param  string  $scope
     * @return string scoped value
     */
    private function scopeTo($scope, $value)
    {
        return $scope . $value . $scope;
    }

    /**
     * Get file's content
     *
     * @param  string  $path
     * @param  string  $scope
     * @return string|bool content or error
     */
    public function readFile(string $path)
    {
        return file_get_contents($path);
    }
}
