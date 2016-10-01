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
        $__internal_bbc2015a8ee56c7e64371c07b4a0f319fdd38784faf599a3e16ee26c2e2f1b89 = $this->env->getExtension("native_profiler");
        $__internal_bbc2015a8ee56c7e64371c07b4a0f319fdd38784faf599a3e16ee26c2e2f1b89->enter($__internal_bbc2015a8ee56c7e64371c07b4a0f319fdd38784faf599a3e16ee26c2e2f1b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_bbc2015a8ee56c7e64371c07b4a0f319fdd38784faf599a3e16ee26c2e2f1b89->leave($__internal_bbc2015a8ee56c7e64371c07b4a0f319fdd38784faf599a3e16ee26c2e2f1b89_prof);

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
