<?php
declare(strict_types=1);

namespace App\Domain\Jobdating;

interface JobdatingRepository
{
    /**
     * @return Jobdating[]
     */
    public function findAll(): array;

    /**
     * @param int $id
     * @return Jobdating
     * @throws JobdatingNotFoundException
     */
    public function findJobdatingOfId(int $id): Jobdating;

}
