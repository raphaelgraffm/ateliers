<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_730f15485af7abe3e2b3e83588b001bcbef5fa2b86e49af7d4bdf2e7d0241db6 extends Twig_Template
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
        $__internal_37c89e7c3488307c28a62629671b98203cdf60594b3174986050c9f424c29c51 = $this->env->getExtension("native_profiler");
        $__internal_37c89e7c3488307c28a62629671b98203cdf60594b3174986050c9f424c29c51->enter($__internal_37c89e7c3488307c28a62629671b98203cdf60594b3174986050c9f424c29c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_37c89e7c3488307c28a62629671b98203cdf60594b3174986050c9f424c29c51->leave($__internal_37c89e7c3488307c28a62629671b98203cdf60594b3174986050c9f424c29c51_prof);

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
