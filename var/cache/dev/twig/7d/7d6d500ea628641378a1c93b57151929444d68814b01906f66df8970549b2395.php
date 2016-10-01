<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_bca4f441e075c7e22d19b74831579fa77d59803099101ea927058ec060c0ab88 extends Twig_Template
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
        $__internal_e87044321abc95c7c903133bcf2017c469b55165c5e6d48fbed29e857c873e7f = $this->env->getExtension("native_profiler");
        $__internal_e87044321abc95c7c903133bcf2017c469b55165c5e6d48fbed29e857c873e7f->enter($__internal_e87044321abc95c7c903133bcf2017c469b55165c5e6d48fbed29e857c873e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_e87044321abc95c7c903133bcf2017c469b55165c5e6d48fbed29e857c873e7f->leave($__internal_e87044321abc95c7c903133bcf2017c469b55165c5e6d48fbed29e857c873e7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
