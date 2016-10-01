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
        $__internal_5b34fa359e6224c6891bd351aef9eb9abb0825260d7e2a2f4383105d82d08d18 = $this->env->getExtension("native_profiler");
        $__internal_5b34fa359e6224c6891bd351aef9eb9abb0825260d7e2a2f4383105d82d08d18->enter($__internal_5b34fa359e6224c6891bd351aef9eb9abb0825260d7e2a2f4383105d82d08d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_5b34fa359e6224c6891bd351aef9eb9abb0825260d7e2a2f4383105d82d08d18->leave($__internal_5b34fa359e6224c6891bd351aef9eb9abb0825260d7e2a2f4383105d82d08d18_prof);

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
