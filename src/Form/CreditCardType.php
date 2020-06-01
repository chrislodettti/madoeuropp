<?php

namespace App\Form;

   use App\Entity\creditcard;
   use Symfony\Component\Form\AbstractType;
   use Symfony\Component\Form\FormBuilderInterface;
   use Symfony\Component\Form\Extension\Core\Type\TextType;
   use Symfony\Component\Form\Extension\Core\Type\EmailType;
   use Symfony\Component\Form\Extension\Core\Type\PasswordType;
   use Symfony\Component\Form\Extension\Core\Type\SubmitType;
   use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
   use Symfony\Component\OptionsResolver\OptionsResolver;
   
   
   Class CreditCardType extends AbstractType{
       
      public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('owner', TextType::class,[
                        'label'=>'Titular de la tarjeta',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-username form-control'
                        ]
                    ])
                    
                    ->add('number', TextType::class,[
                        'label'=>'Numero de tarjeta',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-username form-control'
                        ]
                    ])
                    
                        ->add('cvv', TextType::class,[
                        'label'=>'CVV: Parte Trasera ',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-username form-control'
                        ]
                    ])
                    
                    ->add('endDate', TextType::class,[
                        'label'=>'Fecha Caducidad',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-username form-control'
                        ]
                    ])
                 ->add('direccion', TextType::class,[
                        'label'=>'direccion de envio',
                        'required'=>'required',
                        'attr'=>[
                            'class'=>'form-username form-control'
                        ]
                    ])
                    
                    

        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'App\Entity\CreditCard',
        ]);
    }
} 
       
       
       
       
       
   

