<?php
return array (
  'uuid' => '0a54246a-1410-a34c-a143-a00e1b213a0f',
  'type' => 'contact',
  'recipients' => 'ajulios123@hotmail.com',
  'subject' => 'Contact Form',
  'reply' => 'Your message was sent. Thank you.',
  'buttonText' => 'Send e-mail',
  'captchaEnabled' => true,
  'visibilityMode' => 'all',
  'styles' => 
  array (
    'margin' => '0 0 0 0',
    'padding' => '5px 10px 5px 10px',
    'background' => '',
    'backgroundColor' => 'transparent',
    'backgroundPosition' => 'top left',
    'backgroundStretch' => 'tile',
    'backgroundOpacity' => '100',
    'borderRadius' => '0 0 0 0',
    'boxShadow' => 'none',
    'textColor' => 'inherit',
    'textStroke' => false,
    'linkColor' => 'inherit',
    'linkStroke' => false,
    'h1Color' => 'inherit',
    'h1Stroke' => false,
    'h2Color' => 'inherit',
    'h2Stroke' => false,
  ),
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'name',
      'type' => 'textfield',
      'title' => 'Nombre',
      'required' => true,
    ),
    1 => 
    array (
      'name' => 'mail',
      'type' => 'email',
      'title' => 'Email',
      'required' => true,
    ),
  ),
  'badCaptcha' => 'El texto introducido no coincide con el texto proporcionado en la imagen.',
  'wrongRequest' => 'Petición errónea',
  'isPassCaptcha' => false,
  'recaptchaPrivateKey' => '6LcIkNMSAAAAAL_dH5rlWS0XsGfXg9IODumFDHeK',
);
?>