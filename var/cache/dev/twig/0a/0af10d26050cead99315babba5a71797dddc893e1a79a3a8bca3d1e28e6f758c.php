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
        $__internal_305534a5525a32d20e2932e2f20bf6c5729e80e2c393ff6146d3f8ddd8ff8986 = $this->env->getExtension("native_profiler");
        $__internal_305534a5525a32d20e2932e2f20bf6c5729e80e2c393ff6146d3f8ddd8ff8986->enter($__internal_305534a5525a32d20e2932e2f20bf6c5729e80e2c393ff6146d3f8ddd8ff8986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_305534a5525a32d20e2932e2f20bf6c5729e80e2c393ff6146d3f8ddd8ff8986->leave($__internal_305534a5525a32d20e2932e2f20bf6c5729e80e2c393ff6146d3f8ddd8ff8986_prof);

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
