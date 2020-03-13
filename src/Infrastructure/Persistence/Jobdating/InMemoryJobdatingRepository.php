<?php
declare(strict_types=1);

namespace App\Infrastructure\Persistence\Jobdating;

use App\Domain\Jobdating\Jobdating;
use App\Domain\Jobdating\JobdatingNotFoundException;
use App\Domain\Jobdating\JobdatingRepository;

class InMemoryJobdatingRepository implements JobdatingRepository
{
    /**
     * @var Jobdating[]
     */
    private $Jobdatings;

    /**
     * InMemoryJobdatingRepository constructor.
     *
     * @param array|null $Jobdating
     */
    public function __construct(array $Jobdating = null)
    {
        $this->Jobdatings = $Jobdatings ?? $this->_load();
    }

     public function _load() {
        return [
            1 => new Jobdating(1, 'Numérique', 'Gex', 'Gates', 'Paul', 12092020),
            2 => new Jobdating(2, 'Sécurité', 'Lyon', 'Jobs', 'Antoine', 19032020),
            3 => new Jobdating(3, 'Réseaux', 'Lyon', 'Zuckerberg', "Lucie", 03052020),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function findAll(): array
    {
        // request on BDD
        // return results
        return array_values($this->Jobdatings);
    }

    /**
     * {@inheritdoc}
     */
    public function findJobdatingOfId(int $id): Jobdating
    {
        if (!isset($this->Jobdatings[$id])) {
            throw new JobdatingNotFoundException();
        }

        return $this->Jobdatings[$id];
    }
}
