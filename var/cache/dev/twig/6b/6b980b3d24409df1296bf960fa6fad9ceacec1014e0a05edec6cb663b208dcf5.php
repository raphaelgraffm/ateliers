<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_de67eb134f7e40e6a5360655a0c9bbbd57ac380c07a4796bf7857c1d04627edb extends Twig_Template
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
        $__internal_6566008431afe02b77ddae22fbae835afea213fcce785acb7a6766cbdcf7ed5e = $this->env->getExtension("native_profiler");
        $__internal_6566008431afe02b77ddae22fbae835afea213fcce785acb7a6766cbdcf7ed5e->enter($__internal_6566008431afe02b77ddae22fbae835afea213fcce785acb7a6766cbdcf7ed5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_6566008431afe02b77ddae22fbae835afea213fcce785acb7a6766cbdcf7ed5e->leave($__internal_6566008431afe02b77ddae22fbae835afea213fcce785acb7a6766cbdcf7ed5e_prof);

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