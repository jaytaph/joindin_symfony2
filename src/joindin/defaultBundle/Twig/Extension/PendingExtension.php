<?php

namespace joindin\defaultBundle\Twig\Extension;

use Symfony\Bridge\Doctrine\RegistryInterface;

class PendingExtension extends \Twig_Extension
{
    protected $doctrine;

    public function __construct(RegistryInterface $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    // Now you can do $this->doctrine->getRepository('TennisconnectUserBundle:User')


    public function getFunctions()
    {
        return array(
            'pendingEvents' => new \Twig_Function_Method($this, 'getPendingEvents'),
            'talkClaims' => new \Twig_Function_Method($this, 'getTalkClaims'),
            'eventClaims' => new \Twig_Function_method($this, 'getEventClaims'),
        );
    }

    function getPendingEvents(\joindin\UserBundle\Entity\User $user) {
        $repo = $this->doctrine->getRepository('joindinEventBundle:Events');
        $tmp =  $repo->getPendingEvents($user);
        return $tmp;
    }

    function getTalkClaims(\joindin\UserBundle\Entity\User $user) {
        $repo = $this->doctrine->getRepository('joindinTalkBundle:TalkSpeaker');
        return $repo->getTalkClaims($user);
    }

    function getEventClaims(\joindin\UserBundle\Entity\User $user) {
        $repo = $this->doctrine->getRepository('joindinEventBundle:EventAdmin');
        return $repo->getEventClaims($user);
    }

    /**
    * @return string
    */
    public function getName()
    {
        return 'pendingExtension';
    }
}
