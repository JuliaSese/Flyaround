<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a40a6060e1adbd59aef8d786790e899ea0feb7bc866ea79c8b021c1d0e3332f3 extends Twig_Template
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
        $__internal_a0027a5ab5c66e228dcfe214b1000d3c9af767e1b3ba228145e2344f2b06dc59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0027a5ab5c66e228dcfe214b1000d3c9af767e1b3ba228145e2344f2b06dc59->enter($__internal_a0027a5ab5c66e228dcfe214b1000d3c9af767e1b3ba228145e2344f2b06dc59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_59b82b9db1519559c7338bd926f89454a5ede705980407989f02b485bac1b639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b82b9db1519559c7338bd926f89454a5ede705980407989f02b485bac1b639->enter($__internal_59b82b9db1519559c7338bd926f89454a5ede705980407989f02b485bac1b639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a0027a5ab5c66e228dcfe214b1000d3c9af767e1b3ba228145e2344f2b06dc59->leave($__internal_a0027a5ab5c66e228dcfe214b1000d3c9af767e1b3ba228145e2344f2b06dc59_prof);

        
        $__internal_59b82b9db1519559c7338bd926f89454a5ede705980407989f02b485bac1b639->leave($__internal_59b82b9db1519559c7338bd926f89454a5ede705980407989f02b485bac1b639_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
