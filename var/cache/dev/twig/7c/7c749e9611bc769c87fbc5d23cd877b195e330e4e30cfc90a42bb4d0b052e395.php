<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_9e06f016c150665dc2acf496fe95cbbf4c1b2f662999cd23924f8860c4883f83 extends Twig_Template
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
        $__internal_95a90ae0fbd6c5e80dde57b0da89fd42b08be493f14f9d4c2f707dc92668821a = $this->env->getExtension("native_profiler");
        $__internal_95a90ae0fbd6c5e80dde57b0da89fd42b08be493f14f9d4c2f707dc92668821a->enter($__internal_95a90ae0fbd6c5e80dde57b0da89fd42b08be493f14f9d4c2f707dc92668821a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_95a90ae0fbd6c5e80dde57b0da89fd42b08be493f14f9d4c2f707dc92668821a->leave($__internal_95a90ae0fbd6c5e80dde57b0da89fd42b08be493f14f9d4c2f707dc92668821a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
