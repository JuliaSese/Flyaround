<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_1a7fd2a3da7b53b8fe318ca359a31e9bfa9d928236123d7d38e625027f7dc1c4 extends Twig_Template
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
        $__internal_fee13264bd23eb729875e3cf31fa2a39c68a064ce30bae9d3f9a382cbc5f2126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fee13264bd23eb729875e3cf31fa2a39c68a064ce30bae9d3f9a382cbc5f2126->enter($__internal_fee13264bd23eb729875e3cf31fa2a39c68a064ce30bae9d3f9a382cbc5f2126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_b863f13cde9d3d1e5b802c3bca0721047c180d39bb95818b1eb55b2d3ae8502e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b863f13cde9d3d1e5b802c3bca0721047c180d39bb95818b1eb55b2d3ae8502e->enter($__internal_b863f13cde9d3d1e5b802c3bca0721047c180d39bb95818b1eb55b2d3ae8502e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
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
        
        $__internal_fee13264bd23eb729875e3cf31fa2a39c68a064ce30bae9d3f9a382cbc5f2126->leave($__internal_fee13264bd23eb729875e3cf31fa2a39c68a064ce30bae9d3f9a382cbc5f2126_prof);

        
        $__internal_b863f13cde9d3d1e5b802c3bca0721047c180d39bb95818b1eb55b2d3ae8502e->leave($__internal_b863f13cde9d3d1e5b802c3bca0721047c180d39bb95818b1eb55b2d3ae8502e_prof);

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
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
