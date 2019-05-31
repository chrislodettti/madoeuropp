<?php

namespace App\Form;

   use Symfony\Component\Form\AbstractType;
   use Symfony\Component\Form\FormBuilderInterface;
   use Symfony\Component\Form\Extension\Core\Type\TextType;
   use Symfony\Component\Form\Extension\Core\Type\FileType;
   use Symfony\Component\Form\Extension\Core\Type\IntegerType;
   use Symfony\Component\Form\Extension\Core\Type\SubmitType;
   use Symfony\Component\OptionsResolver\OptionsResolver;
   
class CompraType extends AbstractType{
 public function buildForm(FormBuilderInterface $builder, array $options) {
            $builder
                    ->add('numcuenta', TextType::class,[
                        'label'=>'Numero de cuenta',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-control'
                        ]
                    ])
                    
                      ->add('price', TextType::class,[
                        'label'=>'Price',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-control'
                        ]
                    ])
                    
                    ->add('Signup', SubmitType::class,
                            ['label'=>'Compra añadida',
                                'attr'=>[
                                'class'=>'form-submit btn btn-success'
                        ]]);
           
       }
       public function configureOptions(OptionsResolver $resolver)
        {
            $resolver->setDefaults([
                'data_class' =>'App\Entity\Detallcompra',
            ]);
        }
    
    
}
