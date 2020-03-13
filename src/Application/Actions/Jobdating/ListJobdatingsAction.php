<?php
declare(strict_types=1);

namespace App\Application\Actions\Jobdating;

use Psr\Http\Message\ResponseInterface as Response;

class ListJobdatingsAction extends JobdatingAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $Jobdatings = $this->JobdatingRepository->findAll();

        $this->logger->info("Jobdatings list was viewed.");

        return $this->respondWithData($Jobdatings);
    }
}
