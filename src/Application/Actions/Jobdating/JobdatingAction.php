<?php
declare(strict_types=1);

namespace App\Application\Actions\Jobdating;

use App\Application\Actions\Action;
use App\Domain\Jobdating\JobdatingRepository;
use Psr\Log\LoggerInterface;

abstract class JobdatingAction extends Action
{
    /**
     * @var JobdatingRepository
     */
    protected $JobdatingRepository;

    /**
     * @param LoggerInterface $logger
     * @param JobdatingRepository  $JobdatingRepository
     */
    public function __construct(LoggerInterface $logger, JobdatingRepository $JobdatingRepository)
    {
        parent::__construct($logger);
        $this->JobdatingRepository = $JobdatingRepository;
    }
}
