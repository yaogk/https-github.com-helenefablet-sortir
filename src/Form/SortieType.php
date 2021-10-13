<?php

namespace App\Form;

use App\Entity\Campus;
use App\Entity\Lieu;
use App\Entity\Sortie;
use App\Entity\Ville;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SortieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',null,[

                "label"=> "Nom de la sortie :"
            ])
            ->add('dateHeureDebut',null,[

                "label"=> "Date et heure de la sortie :"
            ])
            ->add('dateLimiteInscription',null,[

                "label"=> "Date limite d'inscription :"
            ])
            ->add('nbInscriptionsMax',null,[

                "label"=> "Nombre de places :"
            ])
            ->add('duree',null,[

                "label"=> "Durée :"
            ])


            ->add('infosSortie',null,[

                "label"=> "Description et infos :"
            ])


            ->add('ville',EntityType::class,[
                "class"=> Ville::class,
                "label"=> "Ville :",
                "choice_label"=> "nom",
                "mapped"=> false
            ])
            ->add('lieu',EntityType::class,[
                "class"=> Lieu::class,
                "label"=> "Lieu :",
                "choice_label"=> "nom"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sortie::class,
        ]);
    }
}
