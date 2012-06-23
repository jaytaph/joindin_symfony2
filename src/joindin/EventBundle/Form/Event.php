<?php

namespace joindin\EventBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class Event extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('eventName', null, array(
                        'required' => true,
                        'label' => 'Event Title'))
                ->add('eventLoc', "text", array(
                        'required' => true,
                        'label' => 'Venue name'))
                ->add('eventLong', "text", array(
                        'required' => true,
                        'label' => 'Venue location'))
                ->add('eventLat', 'text', array(
                        'required' => true))

                ->add('eventContactName', null, array(
                        'label' => 'Event Contact Name'))
                ->add('eventContactEmail', 'email', array(
                        'label' => 'Event Contact Email'))
                ->add('isEventAdmin', 'checkbox', array(
                        'required' => false,
                        'attr' => array('class' => 'checkbox'),
                        'property_path' => false,
                        'label' => "I'm an event admin!"))

                ->add('eventTz', 'timezone', array(
                        'label' => 'Event timezone'))
                ->add('eventStart', 'datetime', array(
                        'label' => 'Event start date',
                        'years' => range(date('Y') - 1, date('Y') + 2),
                        'minutes' => range(0, 55, 5) ))
                ->add('eventEnd', 'datetime', array(
                        'label' => 'Event end date',
                        'years' => range(date('Y') - 1, date('Y') + 2),
                        'minutes' => range(0, 55, 5) ))

                ->add('eventDesc', null, array(
                        'required' => true,
                        'label' => 'Event Description',
                        'attr' => array('rows' => 8) ))
                ->add('private', 'checkbox', array(
                        'required' => false,
                        'attr' => array('class' => 'checkbox'),
                        'label' => 'Is this event private?'));

        // @TODO: Can we remove our captcha after a successful event?
        $builder
                ->add('captcha', 'captcha');
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'joindin\EventBundle\Entity\Events',
        );
    }

    public function getName()
    {
        return "event";
    }
}