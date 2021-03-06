<?php

namespace Listabierta\Bundle\MunicipalesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints as Assert;

class TownStep3Type extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			     ->add('job_experience', 'choice', array(
			     		'multiple' => TRUE,
			     		'expanded' => TRUE,
			     		'choices' => array(
			     				'0' => 'No considero importante su experiencia laboral previa', // (no aparece el resto de opciones)
			     				'1' => 'Actividades físicas o deportivas',
			     				'2' => 'Administración o gestión',
			     				'3' => 'Agraria o pesquera',
			     				'4' => 'Arte o artesanía',
			     				'5' => 'Comercio y marketing',
			     				'6' => 'Edificación, obra civil',
			     				'7' => 'Energía o agua',
			     				'8' => 'Mecánica, electricidad o electrónica',
			     				'9' => 'Hostelería y turismo',
			     				'10' => 'Informática o comunicaciones',
			     				'11' => 'Industria',
			     				'12' => 'Sanidad',
			     				'13' => 'Medio Ambiente',
			     				'14' => 'Educación o servicios a la comunidad',
			     				'15' => 'Transporte',
			     				'16' => 'Finanzas',
			     		),
			     		'data_class' => NULL,
			     		'constraints' => array(
			     				new Assert\Count(array(
						            'max'        => 3,
						            'minMessage' => 'You must specify at least one email',
						            'maxMessage' => 'Sólo puedes seleccionar hasta {{ limit }} opciones como máximo',
						        ))
			     		)
			     ))
	            ->add('continue', 'submit', array('attr' => array('class' => 'submit')));     
    }
	
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
    }

    public function getName()
    {
        return 'town_step3';
    }
}