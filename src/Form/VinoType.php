<?php

namespace App\Form;


    use App\Entity\Vino;
    use Symfony\Component\Form\AbstractType;
   use Symfony\Component\Form\FormBuilderInterface;
   use Symfony\Component\Form\Extension\Core\Type\TextType;
   use Symfony\Component\Form\Extension\Core\Type\FileType;
   use Symfony\Component\Form\Extension\Core\Type\IntegerType;
   use Symfony\Component\Form\Extension\Core\Type\SubmitType;
   use Symfony\Component\OptionsResolver\OptionsResolver;
class VinoType extends AbstractType{
 public function buildForm(FormBuilderInterface $builder, array $options) {
            $builder
 ->add('nombre', TextType::class,[
                        'label'=>'Nombre',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-control'
                        ]
                    ])
                    
                      ->add('Volumen', TextType::class,[
                        'label'=>'Volumen',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-control'
                        ]
                    ])
                      ->add('yearvendimia', TextType::class,[
                        'label'=>'yearvendimia',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-control'
                        ]
                    ])
                    
                        ->add('uvas', TextType::class,[
                        'label'=>'indica las uvas',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-control'
                        ]
                    ])
                    
                        ->add('denominacion', TextType::class,[
                        'label'=>'denominacion',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-control'
                        ]
                    ])
                    ->add('Alergenos', TextType::class,[
                        'label'=>'Alergenos',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-control'
                        ]
                    ])
                    
                   
                 ->add('logo',FileType::class,[
                    	'required'=>true,
                    	'label'=>'Imagen de tu vino (PNG,JPEG)'
                	])
                    
                     ->add('price', TextType::class,[
                        'label'=>'indica price',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>' form-control'
                        ]
                    ])
                     ->add('Tipovino', TextType::class,[
                        'label'=>'Tipovino',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>' form-control'
                        ]
                    ])
      
                    ->add('Signup', SubmitType::class,
                            ['label'=>'Vino añadido',
                                'attr'=>[
                                'class'=>'form-submit btn btn-success'
                        ]]);
           
       }
       public function configureOptions(OptionsResolver $resolver)
        {
            $resolver->setDefaults([
                'data_class' =>'App\Entity\Vino',
            ]);
        }
    
    
}
