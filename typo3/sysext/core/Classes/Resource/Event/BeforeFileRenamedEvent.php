<?php
declare(strict_types = 1);

namespace TYPO3\CMS\Core\Resource\Event;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Core\Resource\FileInterface;

/**
 * This event is fired before a file is about to be renamed. Custom listeners can further rename the file
 * according to specific guidelines based on the project.
 */
final class BeforeFileRenamedEvent
{
    /**
     * @var FileInterface
     */
    private $file;

    /**
     * @var string|null
     */
    private $targetFileName;

    public function __construct(FileInterface $file, ?string $targetFileName)
    {
        $this->file = $file;
        $this->targetFileName = $targetFileName;
    }

    public function getFile(): FileInterface
    {
        return $this->file;
    }

    public function getTargetFileName(): ?string
    {
        return $this->targetFileName;
    }
}
