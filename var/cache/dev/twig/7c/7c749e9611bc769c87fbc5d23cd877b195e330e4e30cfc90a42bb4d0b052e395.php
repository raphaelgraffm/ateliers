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
        $__internal_6822e648c8770cd90d67810d2828cf7f41224e8007e1613393b512ca835b4256 = $this->env->getExtension("native_profiler");
        $__internal_6822e648c8770cd90d67810d2828cf7f41224e8007e1613393b512ca835b4256->enter($__internal_6822e648c8770cd90d67810d2828cf7f41224e8007e1613393b512ca835b4256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_6822e648c8770cd90d67810d2828cf7f41224e8007e1613393b512ca835b4256->leave($__internal_6822e648c8770cd90d67810d2828cf7f41224e8007e1613393b512ca835b4256_prof);

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
