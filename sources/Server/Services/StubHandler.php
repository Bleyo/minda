<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Enum\Stub;
use App\Enum\FileExtension;

class StubHandler
{
    private FileHandler $files;

    private string $stubPath;
    private string $stubName;

    private array $templateNames;

    public function __construct(FileHandler $files)
    {
        $this->files = $files;
    }

    public function stub(Stub $stub): self
    {
        $this->templateNames = config('app.stubs')[$stub];
        return $this;
    }

    public function makeStub(string $name, array $values, string $path)
    {
        $this->stubPath = $path;
        $this->stubName = $name;

        $this->generateStub($values);
    }

    private function generateStub(array $values)
    {
        foreach ($this->templateNames as $templateName => $stubExtension) {
            $template = $this->getTemplatePath($templateName);

            $stubContent = $this->mapTemplate($template, $values);
            $stubPath = $this->getStubPath($stubExtension);

            $this->files->createFile($stubContent, $stubPath);
        }
    }

    private function getChildPath($fileExtension)
    {
        $filePath = $this->stubPath;
        $$fileExtension == FileExtension::VIEW
            ? $filePath .= 'templates/' . Str::lower($this->stubName)
            : $filePath .= Str::ucfirst($this->stubName);

        return $this->stubPath . $filePath . $fileExtension->value;
    }

    private function mapTemplate($templateFile, array $stubValues)
    {
        $stubFile = [];
        foreach ($stubValues as $searchVariable => $stubValue) {
            $stubFile .= $this->replaceInFile(
                $searchVariable,
                $stubValue,
                $templateFile
            );
        }

        return $stubFile;
    }

    private function getTemplatePath(string $stubElement)
    {
        return __DIR__ . '/../../../stubs';
    }
}
