<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_834554e3809905ca577eb5d0e4c5cbb4e78db5764b539b510456588ee91f9a5a extends Twig_Template
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
        $__internal_8f7f72c2d7b36bbf3f02a677ffef5d4b2cd770c28aed93694fca4c6b034ee2c8 = $this->env->getExtension("native_profiler");
        $__internal_8f7f72c2d7b36bbf3f02a677ffef5d4b2cd770c28aed93694fca4c6b034ee2c8->enter($__internal_8f7f72c2d7b36bbf3f02a677ffef5d4b2cd770c28aed93694fca4c6b034ee2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_8f7f72c2d7b36bbf3f02a677ffef5d4b2cd770c28aed93694fca4c6b034ee2c8->leave($__internal_8f7f72c2d7b36bbf3f02a677ffef5d4b2cd770c28aed93694fca4c6b034ee2c8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
";
    }
}
