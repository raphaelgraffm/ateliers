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
        $__internal_00b7e064234cdb104c2a0bf7762745911309f337e02cb517fe461831e4580052 = $this->env->getExtension("native_profiler");
        $__internal_00b7e064234cdb104c2a0bf7762745911309f337e02cb517fe461831e4580052->enter($__internal_00b7e064234cdb104c2a0bf7762745911309f337e02cb517fe461831e4580052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_00b7e064234cdb104c2a0bf7762745911309f337e02cb517fe461831e4580052->leave($__internal_00b7e064234cdb104c2a0bf7762745911309f337e02cb517fe461831e4580052_prof);

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
