<?php

namespace Src\Families\Application\UseCases;

use Src\Families\Application\Contracts\FamilyDeleteInterface;
use Src\Families\Domain\Repository\FamilyRepositoryInterface;

class DeleteFamilyUC implements FamilyDeleteInterface
{
    protected $repositoryFamily;

    public function __construct(FamilyRespositoryInterface $repositoryFamily)
    {
        $this->repositoryFamily = $repositoryFamily;
    }
    public function delete(int $id)
    {
        return $this->repositoryFamily->delete($id);
    }
}
