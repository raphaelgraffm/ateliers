<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_8a33497b996520c34a05a19f0762f82337def529b49bdcecc1fdb14a260ad61d extends Twig_Template
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
        $__internal_ea3d8a77ec74535aa10f3c96527e26a90c6d42349f7308b7484c3bab2fd354fc = $this->env->getExtension("native_profiler");
        $__internal_ea3d8a77ec74535aa10f3c96527e26a90c6d42349f7308b7484c3bab2fd354fc->enter($__internal_ea3d8a77ec74535aa10f3c96527e26a90c6d42349f7308b7484c3bab2fd354fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ea3d8a77ec74535aa10f3c96527e26a90c6d42349f7308b7484c3bab2fd354fc->leave($__internal_ea3d8a77ec74535aa10f3c96527e26a90c6d42349f7308b7484c3bab2fd354fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
