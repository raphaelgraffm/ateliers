<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_cc0960aaf6c39f451bd28718e8fa3b60a95e7a9ab1b6b8f4dc99f0316fcad98f extends Twig_Template
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
        $__internal_de0faa0cd99f46798a30582cf691f51c66fc1d99ccc5873a4ebc40598f4994c3 = $this->env->getExtension("native_profiler");
        $__internal_de0faa0cd99f46798a30582cf691f51c66fc1d99ccc5873a4ebc40598f4994c3->enter($__internal_de0faa0cd99f46798a30582cf691f51c66fc1d99ccc5873a4ebc40598f4994c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_de0faa0cd99f46798a30582cf691f51c66fc1d99ccc5873a4ebc40598f4994c3->leave($__internal_de0faa0cd99f46798a30582cf691f51c66fc1d99ccc5873a4ebc40598f4994c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
