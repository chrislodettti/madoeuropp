<?php

namespace App\Form;

   use Symfony\Component\Form\AbstractType;
   use Symfony\Component\Form\FormBuilderInterface;
   use Symfony\Component\Form\Extension\Core\Type\TextType;
   use Symfony\Component\Form\Extension\Core\Type\IntegerType;
   use Symfony\Component\Form\Extension\Core\Type\SubmitType;
   use Symfony\Component\OptionsResolver\OptionsResolver;
   
class VehicleAdminType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options) {
            $builder
                    ->add('modelo', TextType::class,[
                        'label'=>'Modelo:',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-todo form-control'
                        ]
                    ])
                    ->add('marca', TextType::class,[
                        'label'=>'Marca:',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-todo form-control'
                        ]
                    ])
                       ->add('price', TextType::class,[
                        'label'=>'Precio:',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-todo form-control'
                        ]
                    ])
                          ->add('puertas', TextType::class,[
                        'label'=>'Puertas:',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-todo form-control'
                        ]
                    ])
                    
                    
                          ->add('Km', TextType::class,[
                        'label'=>'Km:',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-todo form-control'
                        ]
                    ])
                    
                    ->add('Signup', SubmitType::class,
                            ['label'=>'Registro vehiculo',
                                'attr'=>[
                                'class'=>'form-submit btn btn-success'
                        ]]);
           
       }
       public function configureOptions(OptionsResolver $resolver)
        {
            $resolver->setDefaults([
                'data_class' =>'App\Entity\Vehicle',
            ]);
        }
    
    
}
