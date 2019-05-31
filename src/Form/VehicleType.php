<?php

namespace App\Form;

   use Symfony\Component\Form\AbstractType;
   use Symfony\Component\Form\FormBuilderInterface;
   use Symfony\Component\Form\Extension\Core\Type\TextType;
   use Symfony\Component\Form\Extension\Core\Type\FileType;
   use Symfony\Component\Form\Extension\Core\Type\IntegerType;
   use Symfony\Component\Form\Extension\Core\Type\SubmitType;
   use Symfony\Component\OptionsResolver\OptionsResolver;
   
class VehicleType extends AbstractType{
 public function buildForm(FormBuilderInterface $builder, array $options) {
            $builder
                    ->add('modelo', TextType::class,[
                        'label'=>'Modelo',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-control'
                        ]
                    ])
                    
                      ->add('marca', TextType::class,[
                        'label'=>'Marca',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-control'
                        ]
                    ])
                    
                      ->add('Km', TextType::class,[
                        'label'=>'Km',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-control'
                        ]
                    ])
                    
                            ->add('Combustible', TextType::class,[
                        'label'=>'Combustible',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-control'
                        ]
                    ])
                    
                        ->add('Cambio', TextType::class,[
                        'label'=>'Cambio',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-control'
                        ]
                    ])
                    
                        ->add('color', TextType::class,[
                        'label'=>'color',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-control'
                        ]
                    ])
                    ->add('puertas', TextType::class,[
                        'label'=>'Puertas',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-control'
                        ]
                    ])
                    
                     ->add('plazas', TextType::class,[
                        'label'=>'Plazas',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>' form-control'
                        ]
                    ])
                 ->add('logo',FileType::class,[
                    	'required'=>true,
                    	'label'=>'Imagen de tu vehiculo (PNG,JPEG)'
                	])
                    
                   
                      ->add('price',TextType::class,[
                        'label'=>'Precio',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>' form-control'
                        ]])
                    
                    ->add('Signup', SubmitType::class,
                            ['label'=>'Vehiculo añadido',
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
