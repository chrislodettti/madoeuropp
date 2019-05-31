<?php

namespace App\Form;
   
   use App\Entity\Contactar;
   use Symfony\Component\Form\AbstractType;
   use Symfony\Component\Form\FormBuilderInterface;
   use Symfony\Component\Form\Extension\Core\Type\TextType;
   use Symfony\Component\Form\Extension\Core\Type\EmailType;
   use Symfony\Component\Form\Extension\Core\Type\PasswordType;
   use Symfony\Component\Form\Extension\Core\Type\SubmitType;
   use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
   use Symfony\Component\OptionsResolver\OptionsResolver;
   
   class ContactarType extends AbstractType{
       public function buildForm(FormBuilderInterface $builder, array $options) {
            $builder
                    ->add('nombre', TextType::class,[
                        'label'=>'Nombre',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-username form-control'
                        ]
                    ])
                    
                    ->add('apellido', TextType::class,[
                        'label'=>'Apellido',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-username form-control'
                        ]
                    ])
                     
                    ->add('email', EmailType::class,[
                        'label'=>'Email',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-email form-control'
                        ]
                    ])        
                    
                    ->add('telefono', TextType::class,[
                        'label'=>'Telefono',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-username form-control'
                        ]
                    ])
                        ->add('mensaje', TextType::class,[
                        'label'=>'Mensaje',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-username form-control'
                        ]
                    ])
                    
                   
                    ->add('Enviar', SubmitType::class,
                            ['label'=>'Enviar',
                                'attr'=>[
                                'class'=>'form-submit btn btn-success'
                        ]]);
           
       }
       public function configureOptions(OptionsResolver $resolver)
        {
            $resolver->setDefaults([
                'data_class' =>'App\Entity\Contactar',
            ]);
        }
       
   }