<?php

declare(strict_types=1);

namespace Schvoy\BaseEntityBundle\Entity\Interfaces\Behavior;

use DateTime;

interface SoftDeleteableInterface
{
    public const string DELETED_AT_FIELD = 'deletedAt';

    public function delete(): void;

    public function restore(): void;

    public function isDeleted(): bool;

    public function willBeDeleted(DateTime $deletedAt): bool;

    public function getDeletedAt(): DateTime|null;

    public function setDeletedAt(DateTime|null $deletedAt): void;
}
