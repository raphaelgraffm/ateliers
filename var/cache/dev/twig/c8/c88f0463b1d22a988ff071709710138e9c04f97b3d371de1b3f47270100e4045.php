<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_f02cb75c0706db7ee800f09f418d97c056d25f70b34a3902f3a7424f71b463b2 extends Twig_Template
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
        $__internal_dba4237c66de0d935987895339fcad2d504015b5cf2a2678f206f4ff219fabc0 = $this->env->getExtension("native_profiler");
        $__internal_dba4237c66de0d935987895339fcad2d504015b5cf2a2678f206f4ff219fabc0->enter($__internal_dba4237c66de0d935987895339fcad2d504015b5cf2a2678f206f4ff219fabc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_dba4237c66de0d935987895339fcad2d504015b5cf2a2678f206f4ff219fabc0->leave($__internal_dba4237c66de0d935987895339fcad2d504015b5cf2a2678f206f4ff219fabc0_prof);

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
