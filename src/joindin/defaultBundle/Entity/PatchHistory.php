<?php

namespace joindin\defaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * joindin\defaultBundle\Entity\PatchHistory
 *
 * @ORM\Table(name="patch_history")
 * @ORM\Entity
 */
class PatchHistory
{
    /**
     * @var integer $patchHistoryId
     *
     * @ORM\Column(name="patch_history_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $patchHistoryId;

    /**
     * @var integer $patchNumber
     *
     * @ORM\Column(name="patch_number", type="integer", nullable=true)
     */
    private $patchNumber;

    /**
     * @var datetime $datePatched
     *
     * @ORM\Column(name="date_patched", type="datetime", nullable=false)
     */
    private $datePatched;



    /**
     * Get patchHistoryId
     *
     * @return integer 
     */
    public function getPatchHistoryId()
    {
        return $this->patchHistoryId;
    }

    /**
     * Set patchNumber
     *
     * @param integer $patchNumber
     */
    public function setPatchNumber($patchNumber)
    {
        $this->patchNumber = $patchNumber;
    }

    /**
     * Get patchNumber
     *
     * @return integer 
     */
    public function getPatchNumber()
    {
        return $this->patchNumber;
    }

    /**
     * Set datePatched
     *
     * @param datetime $datePatched
     */
    public function setDatePatched($datePatched)
    {
        $this->datePatched = $datePatched;
    }

    /**
     * Get datePatched
     *
     * @return datetime 
     */
    public function getDatePatched()
    {
        return $this->datePatched;
    }
}