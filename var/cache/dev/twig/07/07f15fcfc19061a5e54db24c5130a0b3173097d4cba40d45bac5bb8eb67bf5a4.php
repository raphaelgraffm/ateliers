<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2868bea721a85b36976fcc69b2e6aff6e4045853d49cc4e94605eb7011c99355 extends Twig_Template
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
        $__internal_974d949dd0afa9996ec9be6f7afefafbfe9429bf249104efb9bd1b87795af572 = $this->env->getExtension("native_profiler");
        $__internal_974d949dd0afa9996ec9be6f7afefafbfe9429bf249104efb9bd1b87795af572->enter($__internal_974d949dd0afa9996ec9be6f7afefafbfe9429bf249104efb9bd1b87795af572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_974d949dd0afa9996ec9be6f7afefafbfe9429bf249104efb9bd1b87795af572->leave($__internal_974d949dd0afa9996ec9be6f7afefafbfe9429bf249104efb9bd1b87795af572_prof);

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
