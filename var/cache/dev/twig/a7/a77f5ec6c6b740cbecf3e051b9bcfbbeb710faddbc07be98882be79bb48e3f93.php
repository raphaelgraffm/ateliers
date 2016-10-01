<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_9030a513203e8f466edd7d5fbd3a483e7ad1b83a1f61cdef5fe32562ef3ffa0a extends Twig_Template
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
        $__internal_5e542df3d308db3a2e26551b6c503bf9615441a4fa19616a3fd1a6bf37663fc4 = $this->env->getExtension("native_profiler");
        $__internal_5e542df3d308db3a2e26551b6c503bf9615441a4fa19616a3fd1a6bf37663fc4->enter($__internal_5e542df3d308db3a2e26551b6c503bf9615441a4fa19616a3fd1a6bf37663fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5e542df3d308db3a2e26551b6c503bf9615441a4fa19616a3fd1a6bf37663fc4->leave($__internal_5e542df3d308db3a2e26551b6c503bf9615441a4fa19616a3fd1a6bf37663fc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
