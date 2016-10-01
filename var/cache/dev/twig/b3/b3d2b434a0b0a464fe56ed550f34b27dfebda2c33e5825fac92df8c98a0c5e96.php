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
        $__internal_ead798d5d37a723cf3b4bb10877bad38a583cfe8f79ed43cdbec88415d95d0b9 = $this->env->getExtension("native_profiler");
        $__internal_ead798d5d37a723cf3b4bb10877bad38a583cfe8f79ed43cdbec88415d95d0b9->enter($__internal_ead798d5d37a723cf3b4bb10877bad38a583cfe8f79ed43cdbec88415d95d0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ead798d5d37a723cf3b4bb10877bad38a583cfe8f79ed43cdbec88415d95d0b9->leave($__internal_ead798d5d37a723cf3b4bb10877bad38a583cfe8f79ed43cdbec88415d95d0b9_prof);

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
