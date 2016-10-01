<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_fda132a8574a9881102511d87cad8ace62d01e4259071c18e759114b753423fe extends Twig_Template
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
        $__internal_e5f82e04587aae7fc491c6b72d5308709ee4ab4e89131328c013cd104fa6a299 = $this->env->getExtension("native_profiler");
        $__internal_e5f82e04587aae7fc491c6b72d5308709ee4ab4e89131328c013cd104fa6a299->enter($__internal_e5f82e04587aae7fc491c6b72d5308709ee4ab4e89131328c013cd104fa6a299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e5f82e04587aae7fc491c6b72d5308709ee4ab4e89131328c013cd104fa6a299->leave($__internal_e5f82e04587aae7fc491c6b72d5308709ee4ab4e89131328c013cd104fa6a299_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
