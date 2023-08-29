<?php
namespace Src\Families\Application\UseCases;

use Src\Families\Application\Contracts\FamilyUpdateInterface;
use Src\Families\Domain\Repository\FamilyRepositoryInterface;

class UpdateFamilyUC implements FamilyUpdateInterface
{
        protected $repositoryFamily;

    public function __construct(FamilyRespositoryInterface $repositoryFamily)
    {
        $this->repositoryFamily = $repositoryFamily;
    }


    public function update(int $id, array $data)
    {
        return $this->repositoryFamily->update($id, $data);
    }
}
