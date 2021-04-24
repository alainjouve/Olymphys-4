<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;

use App\Entity\Equipes ;
use App\Entity\Jures ;
use App\Entity\Notes ;
use App\Entity\Memoires;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextaeraType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NotesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->EST_PasEncoreNotee = $options['EST_PasEncoreNotee'];
        $this->EST_Lecteur = $options['EST_Lecteur'];
       
        // $EST_PasEncoreNotee, $EST_Lecteur
        $choix['Excellent']=Notes::EXCELLENT; 
        $choix['Bien']=Notes::BIEN; 
        $choix['Moyen']=Notes::MOYEN; 
        $choix['Insuffisant']=Notes::INSUFFISANT; 

        if($options['EST_PasEncoreNotee'])
        {   
            if($options['EST_Lecteur'])
            {

                $builder
                ->add('exper',ChoiceType::class,array('choices' => $choix,'placeholder'=>'Évaluer',))
                ->add('demarche',ChoiceType::class,array('choices' => $choix,'placeholder'=>'Évaluer',))
                ->add('oral',ChoiceType::class,array('choices' => $choix,'placeholder'=>'Évaluer',))
                ->add('origin',ChoiceType::class,array('choices' => $choix,'placeholder'=>'Évaluer',))
                ->add('Wgroupe',ChoiceType::class,array('choices' => $choix,'placeholder'=>'Évaluer',))
                ->add('ecrit',ChoiceType::class,array('choices' => $choix,'placeholder'=>'Évaluer',))
                ->add('Enregistrer',SubmitType::class)
                ;

            }
            else
            {

                $builder
                ->add('exper',ChoiceType::class,array('choices' => $choix,'placeholder'=>'Évaluer',))
                ->add('demarche',ChoiceType::class,array('choices' => $choix,'placeholder'=>'Évaluer',))
                ->add('oral',ChoiceType::class,array('choices' => $choix,'placeholder'=>'Évaluer',))
                ->add('origin',ChoiceType::class,array('choices' => $choix,'placeholder'=>'Évaluer',))
                ->add('Wgroupe',ChoiceType::class,array('choices' => $choix,'placeholder'=>'Évaluer',))
                ->add('Enregistrer',SubmitType::class)
                ;

            }
        }
        else
        {
            if($options['EST_Lecteur'])
            {
                $builder
                ->add('exper',ChoiceType::class,array('choices' => $choix,))
                ->add('demarche',ChoiceType::class,array('choices' => $choix,))
                ->add('oral',ChoiceType::class,array('choices' => $choix,))
                ->add('origin',ChoiceType::class,array('choices' => $choix,))
                ->add('Wgroupe',ChoiceType::class,array('choices' => $choix,))
                ->add('ecrit',ChoiceType::class,array('choices' => $choix,))
                ->add('Enregistrer',SubmitType::class)
            ;

            }
            else
            {
                $builder
                ->add('exper',ChoiceType::class,array('choices' => $choix,))
                ->add('demarche',ChoiceType::class,array('choices' => $choix,))
                ->add('oral',ChoiceType::class,array('choices' => $choix,))
                ->add('origin',ChoiceType::class,array('choices' => $choix,))
                ->add('Wgroupe',ChoiceType::class,array('choices' => $choix,))
                ->add('Enregistrer',SubmitType::class)
            ;

            }
        }

    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\Notes',
            'EST_PasEncoreNotee' =>true, 
            'EST_Lecteur'=>true,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cyberjury_notes';
    }


}