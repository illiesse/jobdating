<?php
declare(strict_types=1);

namespace App\Domain\Jobdating;

use App\Domain\DomainException\DomainRecordNotFoundException;

class UserNotFoundException extends DomainRecordNotFoundException
{
    public $message = 'The jobdating you requested does not exist.';
}
