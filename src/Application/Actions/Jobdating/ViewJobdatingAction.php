<?php
declare(strict_types=1);

namespace App\Application\Actions\Jobdating;

use Psr\Http\Message\ResponseInterface as Response;

class ViewJobdatingAction extends JobdatingAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $JobdatingId = (int) $this->resolveArg('id');
        $Jobdating = $this->JobdatingRepository->findJobdatingOfId($JobdatingId);

        $this->logger->info("Jobdating of id `${JobdatingId}` was viewed.");

        return $this->respondWithData($Jobdating);
    }
}
