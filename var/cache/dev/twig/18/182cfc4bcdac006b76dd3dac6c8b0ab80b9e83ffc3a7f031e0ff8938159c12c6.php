<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_5cde304a0b407cafe8c9ba5b8fd77953d09d9281f9d6fbf53cc36b7ff06aa872 extends Twig_Template
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
        $__internal_176fbb441cc774edfe7d2e82c25dd86abebdf52b3604693fc41911b9ee9fcda4 = $this->env->getExtension("native_profiler");
        $__internal_176fbb441cc774edfe7d2e82c25dd86abebdf52b3604693fc41911b9ee9fcda4->enter($__internal_176fbb441cc774edfe7d2e82c25dd86abebdf52b3604693fc41911b9ee9fcda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_176fbb441cc774edfe7d2e82c25dd86abebdf52b3604693fc41911b9ee9fcda4->leave($__internal_176fbb441cc774edfe7d2e82c25dd86abebdf52b3604693fc41911b9ee9fcda4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
