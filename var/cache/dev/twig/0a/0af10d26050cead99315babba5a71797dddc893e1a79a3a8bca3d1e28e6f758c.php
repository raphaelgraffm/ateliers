<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_318e990b60c8dd445933a0bae47189d9a839099564f34e5059cb8e506e5dfedf extends Twig_Template
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
        $__internal_6e118cdaaf349cf2738d63bf537e043c12af6b0b5edb8da791a4ad41572cf080 = $this->env->getExtension("native_profiler");
        $__internal_6e118cdaaf349cf2738d63bf537e043c12af6b0b5edb8da791a4ad41572cf080->enter($__internal_6e118cdaaf349cf2738d63bf537e043c12af6b0b5edb8da791a4ad41572cf080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6e118cdaaf349cf2738d63bf537e043c12af6b0b5edb8da791a4ad41572cf080->leave($__internal_6e118cdaaf349cf2738d63bf537e043c12af6b0b5edb8da791a4ad41572cf080_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
