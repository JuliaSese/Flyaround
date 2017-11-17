<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_365409018ab92ace7889f7fea05429b7a6fb5dfa71fa90abcca0f5b97c4c6c04 extends Twig_Template
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
        $__internal_f2a45919c7e7ffc1f4230ecbebf604e5f82796b986ec13b0b6f93967e29fd4d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2a45919c7e7ffc1f4230ecbebf604e5f82796b986ec13b0b6f93967e29fd4d6->enter($__internal_f2a45919c7e7ffc1f4230ecbebf604e5f82796b986ec13b0b6f93967e29fd4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_7cacfcfcf8b6594b4560b3f2cc1f47b9bcf643636b78ce09d0fc27b177617900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cacfcfcf8b6594b4560b3f2cc1f47b9bcf643636b78ce09d0fc27b177617900->enter($__internal_7cacfcfcf8b6594b4560b3f2cc1f47b9bcf643636b78ce09d0fc27b177617900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_f2a45919c7e7ffc1f4230ecbebf604e5f82796b986ec13b0b6f93967e29fd4d6->leave($__internal_f2a45919c7e7ffc1f4230ecbebf604e5f82796b986ec13b0b6f93967e29fd4d6_prof);

        
        $__internal_7cacfcfcf8b6594b4560b3f2cc1f47b9bcf643636b78ce09d0fc27b177617900->leave($__internal_7cacfcfcf8b6594b4560b3f2cc1f47b9bcf643636b78ce09d0fc27b177617900_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
