<?php

namespace App\Form;
   
   use App\Entity\User;
   use Symfony\Component\Form\AbstractType;
   use Symfony\Component\Form\FormBuilderInterface;
   use Symfony\Component\Form\Extension\Core\Type\TextType;
   use Symfony\Component\Form\Extension\Core\Type\EmailType;
   use Symfony\Component\Form\Extension\Core\Type\PasswordType;
   use Symfony\Component\Form\Extension\Core\Type\SubmitType;
   use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
   use Symfony\Component\OptionsResolver\OptionsResolver;
   
   class RegisterType extends AbstractType{
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
                    
                        ->add('razon_social', TextType::class,[
                        'label'=>'Razon_social',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-username form-control'
                        ]
                    ])
                    
                    ->add('telefono', TextType::class,[
                        'label'=>'Telefono',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-username form-control'
                        ]
                    ])
                    
                    ->add('username', TextType::class,[
                        'label'=>'Username',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-username form-control'
                        ]
                    ])
                     ->add('password', RepeatedType::class,[
                        'type'=>PasswordType::class,
                        'required'=>'required',
                        'first_options'=>['label'=>'Password',
                            'attr'=>[
                            'class'=>'form-password form-control'
                        ]],
                        'second_options'=>['label'=>'Repeat Password',
                            'attr'=>[
                                'class'=>'form-password form-control'
                            ]]
                    ])
                    ->add('email', EmailType::class,[
                        'label'=>'Email',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-email form-control'
                        ]
                    ])
                   
                    ->add('Signup', SubmitType::class,
                            ['label'=>'Sign up',
                                'attr'=>[
                                'class'=>'form-submit btn btn-success'
                        ]]);
           
       }
       public function configureOptions(OptionsResolver $resolver)
        {
            $resolver->setDefaults([
                'data_class' =>'App\Entity\User',
            ]);
        }
       
   }


