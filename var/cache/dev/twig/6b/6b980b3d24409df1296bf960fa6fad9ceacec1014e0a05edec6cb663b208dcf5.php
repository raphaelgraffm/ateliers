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
        $__internal_8b2103fd73da60351cb96e15db2c3ed57fd90d2deb82e27990c56232bc86f672 = $this->env->getExtension("native_profiler");
        $__internal_8b2103fd73da60351cb96e15db2c3ed57fd90d2deb82e27990c56232bc86f672->enter($__internal_8b2103fd73da60351cb96e15db2c3ed57fd90d2deb82e27990c56232bc86f672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8b2103fd73da60351cb96e15db2c3ed57fd90d2deb82e27990c56232bc86f672->leave($__internal_8b2103fd73da60351cb96e15db2c3ed57fd90d2deb82e27990c56232bc86f672_prof);

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
