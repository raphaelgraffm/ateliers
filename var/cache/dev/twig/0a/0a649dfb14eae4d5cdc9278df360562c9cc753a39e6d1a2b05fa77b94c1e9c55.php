<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_27f60bcf44a695c616ca46d6d63b9a2d77951ae444775d38f5e7eb7b5a2500b7 extends Twig_Template
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
        $__internal_7ede187a1aa16876e8e393975b48781f5ddb665a2dcaf8d429eab74585befff7 = $this->env->getExtension("native_profiler");
        $__internal_7ede187a1aa16876e8e393975b48781f5ddb665a2dcaf8d429eab74585befff7->enter($__internal_7ede187a1aa16876e8e393975b48781f5ddb665a2dcaf8d429eab74585befff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7ede187a1aa16876e8e393975b48781f5ddb665a2dcaf8d429eab74585befff7->leave($__internal_7ede187a1aa16876e8e393975b48781f5ddb665a2dcaf8d429eab74585befff7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
