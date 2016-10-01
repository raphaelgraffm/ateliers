<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f5454355a13b7650602b8b5649e055fbba7ecdbc253a7fd3855efd90a127febf extends Twig_Template
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
        $__internal_228adbc2693d80c366472672f5ab2e3ee1660d67d69d8e1990baa7136a1becf4 = $this->env->getExtension("native_profiler");
        $__internal_228adbc2693d80c366472672f5ab2e3ee1660d67d69d8e1990baa7136a1becf4->enter($__internal_228adbc2693d80c366472672f5ab2e3ee1660d67d69d8e1990baa7136a1becf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_228adbc2693d80c366472672f5ab2e3ee1660d67d69d8e1990baa7136a1becf4->leave($__internal_228adbc2693d80c366472672f5ab2e3ee1660d67d69d8e1990baa7136a1becf4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
