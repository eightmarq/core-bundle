<?php

/**
 * This file is part of the EightMarq Symfony bundles.
 *
 * (c) Norbert Schvoy <norbert.schvoy@eightmarq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace EightMarq\CoreBundle\Entity\Traits\Behavior\Blameable;

use Symfony\Component\Security\Core\User\UserInterface;

trait BlameableMethodsTrait
{
    public function getCreatedBy(): UserInterface|null
    {
        return $this->createdBy;
    }

    public function setCreatedBy(UserInterface|null $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    public function getUpdatedBy(): UserInterface|null
    {
        return $this->updatedBy;
    }

    public function setUpdatedBy(UserInterface|null $updatedBy): void
    {
        $this->updatedBy = $updatedBy;
    }

    public function getDeletedBy(): UserInterface|null
    {
        return $this->deletedBy;
    }

    public function setDeletedBy(UserInterface|null $deletedBy): void
    {
        $this->deletedBy = $deletedBy;
    }
}