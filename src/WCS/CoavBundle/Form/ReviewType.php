<?php

namespace WCS\CoavBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;



class ReviewType extends AbstractType
{
  /**
 * {@inheritdoc} Including all fields from Review entity.
 */

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
        $builder
            ->add('text', TextareaType::class, array(
              'label'=>'Description',
              'attr'=>array('maxlength'=>250),
            ))
            ->add('publicationDate', DateType::class, array(
              'data' => new \DateTime('now'),
            ))
            ->add('note', IntegerType::class, array(
              'label' =>'Note',
              'attr'=>array('min'=>0, 'max'=>5),
             ))
            ->add('agreeTerms', CheckboxType::class, array(
              'mapped'=>false,
            ))
            ->add('userRated', EntityType::class, array(
              'choice_label'=>'phoneNumber',
              'class'=>'WCS\CoavBundle\Entity\User',
              'query_builder'=>function(EntityRepository $er){
                return $er->createQueryBuilder('u')
                ->orderBy('u.lastName', 'ASC');
              },
            ))
            ->add('reviewAuthor');
  }
  /**
   * {@inheritdoc} Targeting Review entity
  */

  public function configureOptions(OptionsResolver $resolver)
  {
      $resolver->setDefaults(array(
          'data_class' => 'WCS\CoavBundle\Entity\Review'
         ));
  }

  /**
 * {@inheritdoc} getName() is now deprecated
 */

  public function getBlockPrefix()
  {
        return 'wcs_coavbundle_review';
  }
}
