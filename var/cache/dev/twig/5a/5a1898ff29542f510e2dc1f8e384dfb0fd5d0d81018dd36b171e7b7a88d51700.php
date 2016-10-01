<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_39ec42a984e6d37c07252c8a4f748ce746c2a2a7d8da5accd2ebc3fe44a31c39 extends Twig_Template
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
        $__internal_ddbc890cc27b72533997301eb8376b37133085aea60440590f33d68fad019cba = $this->env->getExtension("native_profiler");
        $__internal_ddbc890cc27b72533997301eb8376b37133085aea60440590f33d68fad019cba->enter($__internal_ddbc890cc27b72533997301eb8376b37133085aea60440590f33d68fad019cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_ddbc890cc27b72533997301eb8376b37133085aea60440590f33d68fad019cba->leave($__internal_ddbc890cc27b72533997301eb8376b37133085aea60440590f33d68fad019cba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
    }
}
