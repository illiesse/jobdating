<?php
declare(strict_types=1);

namespace App\Application\Actions\Jobdating;

use Psr\Http\Message\ResponseInterface as Response;

class UpdateJobdatingAction extends JobdatingAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $JobdatingId = (int) $this->resolveArg('id');

        $datas = $this->getFormData();

        /**
         * @var User
         */
        $Jobdating = $this->JobdatingRepository->findJobdatingOfId($JobdatingId);

        /**
         * @var bool
         */
        $response = $Jobdating->update($datas);

        $this->logger->info("Jobdating of id `${JobdatingId}` was updated.");

        return $this->respondWithData(['updated'=>$response, "Jobdating"=>$Jobdating]);
    }
}