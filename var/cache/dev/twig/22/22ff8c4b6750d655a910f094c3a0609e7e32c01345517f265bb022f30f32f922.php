<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_97b314260ea75b53bef2d635d114836fde54ab7ccfbf93b0b8e02cf6f35f9f3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_092bc5f0bf9de6e507031ff1449f045267c7ebebaa440602b8ad32e708530250 = $this->env->getExtension("native_profiler");
        $__internal_092bc5f0bf9de6e507031ff1449f045267c7ebebaa440602b8ad32e708530250->enter($__internal_092bc5f0bf9de6e507031ff1449f045267c7ebebaa440602b8ad32e708530250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_092bc5f0bf9de6e507031ff1449f045267c7ebebaa440602b8ad32e708530250->leave($__internal_092bc5f0bf9de6e507031ff1449f045267c7ebebaa440602b8ad32e708530250_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1fba609c57329d4826d43abd62b4a3cede0798ab7b89b7c5d1aeca2e85822fab = $this->env->getExtension("native_profiler");
        $__internal_1fba609c57329d4826d43abd62b4a3cede0798ab7b89b7c5d1aeca2e85822fab->enter($__internal_1fba609c57329d4826d43abd62b4a3cede0798ab7b89b7c5d1aeca2e85822fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1fba609c57329d4826d43abd62b4a3cede0798ab7b89b7c5d1aeca2e85822fab->leave($__internal_1fba609c57329d4826d43abd62b4a3cede0798ab7b89b7c5d1aeca2e85822fab_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
