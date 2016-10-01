<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_7febdaffee54a5739b40bcc55c32462fbf5a27893dbd566a105196fadd4d5255 extends Twig_Template
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
        $__internal_e38d284c40436c6a8ad983ad9b655d8a663038bcc2ed261ca17c5ce783c97b45 = $this->env->getExtension("native_profiler");
        $__internal_e38d284c40436c6a8ad983ad9b655d8a663038bcc2ed261ca17c5ce783c97b45->enter($__internal_e38d284c40436c6a8ad983ad9b655d8a663038bcc2ed261ca17c5ce783c97b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_e38d284c40436c6a8ad983ad9b655d8a663038bcc2ed261ca17c5ce783c97b45->leave($__internal_e38d284c40436c6a8ad983ad9b655d8a663038bcc2ed261ca17c5ce783c97b45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
