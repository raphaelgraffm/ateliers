<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b035e39360617d526af83f6f2e231b5d1620416b7b28a227e4bbfd02c0d40fa2 extends Twig_Template
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
        $__internal_a67b1f8245e84742f2a2b9cfff28ea319353b5955156621d5d8c45866e60490d = $this->env->getExtension("native_profiler");
        $__internal_a67b1f8245e84742f2a2b9cfff28ea319353b5955156621d5d8c45866e60490d->enter($__internal_a67b1f8245e84742f2a2b9cfff28ea319353b5955156621d5d8c45866e60490d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a67b1f8245e84742f2a2b9cfff28ea319353b5955156621d5d8c45866e60490d->leave($__internal_a67b1f8245e84742f2a2b9cfff28ea319353b5955156621d5d8c45866e60490d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
