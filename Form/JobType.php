<?php

namespace NineThousand\Bundle\NineThousandJobqueueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class JobType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('retry')
            ->add('cooldown')
            ->add('maxRetries')
            ->add('executable')
            ->add('type')
            ->add('params')
            ->add('args')
            ->add('tags')
        ;
    }

    public function getName()
    {
        return 'ninethousand_bundle_ninethousandjobqueuebundle_jobtype';
    }
}
