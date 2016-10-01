<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_eaf2fe333d26cd020c611487e0ee52d5d160d8ee0386fe8c86266cc1e0d359d1 extends Twig_Template
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
        $__internal_60c0e1066b63e455ca2639ff709e2aa133dacfdd8ef779e875758c698e3a54e6 = $this->env->getExtension("native_profiler");
        $__internal_60c0e1066b63e455ca2639ff709e2aa133dacfdd8ef779e875758c698e3a54e6->enter($__internal_60c0e1066b63e455ca2639ff709e2aa133dacfdd8ef779e875758c698e3a54e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_60c0e1066b63e455ca2639ff709e2aa133dacfdd8ef779e875758c698e3a54e6->leave($__internal_60c0e1066b63e455ca2639ff709e2aa133dacfdd8ef779e875758c698e3a54e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
