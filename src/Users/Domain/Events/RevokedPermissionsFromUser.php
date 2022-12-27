<?php declare(strict_types=1);

namespace App\Users\Domain\Events;

use Somnambulist\Components\Events\AbstractEvent;

class RevokedPermissionsFromUser extends AbstractEvent
{
    protected string $group = 'user';
}
