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
        $__internal_ef187ae5b1b05db9fd4394af591bf6262aa43210bbe57529f45aa4829fb5bc5f = $this->env->getExtension("native_profiler");
        $__internal_ef187ae5b1b05db9fd4394af591bf6262aa43210bbe57529f45aa4829fb5bc5f->enter($__internal_ef187ae5b1b05db9fd4394af591bf6262aa43210bbe57529f45aa4829fb5bc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ef187ae5b1b05db9fd4394af591bf6262aa43210bbe57529f45aa4829fb5bc5f->leave($__internal_ef187ae5b1b05db9fd4394af591bf6262aa43210bbe57529f45aa4829fb5bc5f_prof);

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
