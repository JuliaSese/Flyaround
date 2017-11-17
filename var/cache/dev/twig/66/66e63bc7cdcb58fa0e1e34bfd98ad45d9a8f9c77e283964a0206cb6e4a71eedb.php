<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c1666146a2f6eb159bbdc4ca849be12207a39249dc7ce8fa2f0b9315aa3c6506 extends Twig_Template
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
        $__internal_d354f2ba37a5b16da54ef26c0e294e3214bdcac42166bcbe2740d72d75d89ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d354f2ba37a5b16da54ef26c0e294e3214bdcac42166bcbe2740d72d75d89ad8->enter($__internal_d354f2ba37a5b16da54ef26c0e294e3214bdcac42166bcbe2740d72d75d89ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_d7f5db541da424ed61bfaaf8ac97af38b7efc6ce0ee39f32388f476084c9484f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f5db541da424ed61bfaaf8ac97af38b7efc6ce0ee39f32388f476084c9484f->enter($__internal_d7f5db541da424ed61bfaaf8ac97af38b7efc6ce0ee39f32388f476084c9484f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_d354f2ba37a5b16da54ef26c0e294e3214bdcac42166bcbe2740d72d75d89ad8->leave($__internal_d354f2ba37a5b16da54ef26c0e294e3214bdcac42166bcbe2740d72d75d89ad8_prof);

        
        $__internal_d7f5db541da424ed61bfaaf8ac97af38b7efc6ce0ee39f32388f476084c9484f->leave($__internal_d7f5db541da424ed61bfaaf8ac97af38b7efc6ce0ee39f32388f476084c9484f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
