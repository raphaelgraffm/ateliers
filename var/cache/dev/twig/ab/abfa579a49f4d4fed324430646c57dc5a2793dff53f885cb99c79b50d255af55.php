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
        $__internal_81aea2fa9ac22fea4fc04d7eacb6b87a7c619ba25afc5f8bd163b05b5e31176e = $this->env->getExtension("native_profiler");
        $__internal_81aea2fa9ac22fea4fc04d7eacb6b87a7c619ba25afc5f8bd163b05b5e31176e->enter($__internal_81aea2fa9ac22fea4fc04d7eacb6b87a7c619ba25afc5f8bd163b05b5e31176e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_81aea2fa9ac22fea4fc04d7eacb6b87a7c619ba25afc5f8bd163b05b5e31176e->leave($__internal_81aea2fa9ac22fea4fc04d7eacb6b87a7c619ba25afc5f8bd163b05b5e31176e_prof);

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
