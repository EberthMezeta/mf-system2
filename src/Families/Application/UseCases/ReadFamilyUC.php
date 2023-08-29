<?php
namespace Src\Families\Application\UseCases;

use Src\Families\Application\Contracts\FamilyReadInterface;
use Src\Families\Domain\Repository\FamilyRepositoryInterface;

class ReadFamilyUC implements FamilyReadInterface
{
    protected $repositoryFamily;

    public function __construct(FamilyRespositoryInterface $repositoryFamily)
    {
        $this->repositoryFamily = $repositoryFamily;
    }

    public function read(int $id)
    {
        return $this->repositoryFamily->read($id);
    }
}
