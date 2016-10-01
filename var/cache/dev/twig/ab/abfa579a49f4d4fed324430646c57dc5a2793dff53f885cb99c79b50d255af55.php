<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_fc8ae194802592603f763365953a3985dbd7016d8c78dd4a496b93ae804ef2d2 extends Twig_Template
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
        $__internal_e6bb53d2a508667bce4a715e25693f7ba8f7534ccdec1e0306b9eee47d665932 = $this->env->getExtension("native_profiler");
        $__internal_e6bb53d2a508667bce4a715e25693f7ba8f7534ccdec1e0306b9eee47d665932->enter($__internal_e6bb53d2a508667bce4a715e25693f7ba8f7534ccdec1e0306b9eee47d665932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e6bb53d2a508667bce4a715e25693f7ba8f7534ccdec1e0306b9eee47d665932->leave($__internal_e6bb53d2a508667bce4a715e25693f7ba8f7534ccdec1e0306b9eee47d665932_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
