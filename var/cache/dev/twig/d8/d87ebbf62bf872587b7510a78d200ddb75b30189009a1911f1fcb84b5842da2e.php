<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_cc97f85865283578d293ab09e83a8b21e6ba7ee7da06efe6fbc4638e856e5cc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8663066c8f732d91ed0d9d35ec7ce82c71a3bcd38d7b8efdb038439153471a8 = $this->env->getExtension("native_profiler");
        $__internal_e8663066c8f732d91ed0d9d35ec7ce82c71a3bcd38d7b8efdb038439153471a8->enter($__internal_e8663066c8f732d91ed0d9d35ec7ce82c71a3bcd38d7b8efdb038439153471a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e8663066c8f732d91ed0d9d35ec7ce82c71a3bcd38d7b8efdb038439153471a8->leave($__internal_e8663066c8f732d91ed0d9d35ec7ce82c71a3bcd38d7b8efdb038439153471a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
