<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_fd60ab4c0a1ee9f54b63b9d61b5a8514b38238c6d9ad6770965c3b977d8019a7 extends Twig_Template
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
        $__internal_d39de9912c899dc4db50db7d9392d8e17afa87bf79d5c2529eea6893dc165c41 = $this->env->getExtension("native_profiler");
        $__internal_d39de9912c899dc4db50db7d9392d8e17afa87bf79d5c2529eea6893dc165c41->enter($__internal_d39de9912c899dc4db50db7d9392d8e17afa87bf79d5c2529eea6893dc165c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d39de9912c899dc4db50db7d9392d8e17afa87bf79d5c2529eea6893dc165c41->leave($__internal_d39de9912c899dc4db50db7d9392d8e17afa87bf79d5c2529eea6893dc165c41_prof);

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
