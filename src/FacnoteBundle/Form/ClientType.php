<?php

namespace FacnoteBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomClient')
            ->add('prenomClient')
            ->add('telClient')
            ->add('adrClient')
            ->add('idType', EntityType::class, [
                'class' => 'FacnoteBundle:TypeClient',
                'choice_label' => 'nomType',
                'placeholder' => 'Please select the client type',
                'required' => true,
            ])
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FacnoteBundle\Entity\Client'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'facnotebundle_client';
    }


}
