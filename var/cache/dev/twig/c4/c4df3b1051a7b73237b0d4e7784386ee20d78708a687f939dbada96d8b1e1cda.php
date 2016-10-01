<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_57cc0a961b718409074e3a491f5f64f0a9ae3f5b221a10bd40df6420e2c7c7c5 extends Twig_Template
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
        $__internal_649287dab028d394f0dbd7eb97693c3a70f35513ead7148126655dcf29ed6ab7 = $this->env->getExtension("native_profiler");
        $__internal_649287dab028d394f0dbd7eb97693c3a70f35513ead7148126655dcf29ed6ab7->enter($__internal_649287dab028d394f0dbd7eb97693c3a70f35513ead7148126655dcf29ed6ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_649287dab028d394f0dbd7eb97693c3a70f35513ead7148126655dcf29ed6ab7->leave($__internal_649287dab028d394f0dbd7eb97693c3a70f35513ead7148126655dcf29ed6ab7_prof);

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
