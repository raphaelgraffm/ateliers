<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c7e1b5383caebf5b38c4deb9e4a04055b43169f5478f0190a696fb2eed4f32d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_562d9b6b49e007e7ea7f18c6e18a867899cb83be843e31b78d94cc09c80b9f1c = $this->env->getExtension("native_profiler");
        $__internal_562d9b6b49e007e7ea7f18c6e18a867899cb83be843e31b78d94cc09c80b9f1c->enter($__internal_562d9b6b49e007e7ea7f18c6e18a867899cb83be843e31b78d94cc09c80b9f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_562d9b6b49e007e7ea7f18c6e18a867899cb83be843e31b78d94cc09c80b9f1c->leave($__internal_562d9b6b49e007e7ea7f18c6e18a867899cb83be843e31b78d94cc09c80b9f1c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c4fd770f1681cc8aeaaeee99fea994c533f3e42867cbc088973636d291a1984 = $this->env->getExtension("native_profiler");
        $__internal_0c4fd770f1681cc8aeaaeee99fea994c533f3e42867cbc088973636d291a1984->enter($__internal_0c4fd770f1681cc8aeaaeee99fea994c533f3e42867cbc088973636d291a1984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0c4fd770f1681cc8aeaaeee99fea994c533f3e42867cbc088973636d291a1984->leave($__internal_0c4fd770f1681cc8aeaaeee99fea994c533f3e42867cbc088973636d291a1984_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_559b3f8bffacbb3037ce5fea600ed473b9adf7d6bfad9180207755085282406e = $this->env->getExtension("native_profiler");
        $__internal_559b3f8bffacbb3037ce5fea600ed473b9adf7d6bfad9180207755085282406e->enter($__internal_559b3f8bffacbb3037ce5fea600ed473b9adf7d6bfad9180207755085282406e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_559b3f8bffacbb3037ce5fea600ed473b9adf7d6bfad9180207755085282406e->leave($__internal_559b3f8bffacbb3037ce5fea600ed473b9adf7d6bfad9180207755085282406e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d397537a54e71a57875727e6adf6350263dc8e301fcb31d553a4bfd1f5ca2f85 = $this->env->getExtension("native_profiler");
        $__internal_d397537a54e71a57875727e6adf6350263dc8e301fcb31d553a4bfd1f5ca2f85->enter($__internal_d397537a54e71a57875727e6adf6350263dc8e301fcb31d553a4bfd1f5ca2f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d397537a54e71a57875727e6adf6350263dc8e301fcb31d553a4bfd1f5ca2f85->leave($__internal_d397537a54e71a57875727e6adf6350263dc8e301fcb31d553a4bfd1f5ca2f85_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
