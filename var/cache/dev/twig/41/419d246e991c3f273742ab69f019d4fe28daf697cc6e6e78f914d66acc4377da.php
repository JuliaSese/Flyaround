<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_420662ea07c7eb31eafbc2e4c79560047a4af17b2eea2a28471cad821cd71dc7 extends Twig_Template
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
        $__internal_7d373fe9d663ee667142ef0373619ceb18c6fc27bd5823aa75d7f96daec9a142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d373fe9d663ee667142ef0373619ceb18c6fc27bd5823aa75d7f96daec9a142->enter($__internal_7d373fe9d663ee667142ef0373619ceb18c6fc27bd5823aa75d7f96daec9a142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_d5ea80240614e13128b2cb32ebc99d302445ea69c5393e88c6b9c5db81a7b21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5ea80240614e13128b2cb32ebc99d302445ea69c5393e88c6b9c5db81a7b21d->enter($__internal_d5ea80240614e13128b2cb32ebc99d302445ea69c5393e88c6b9c5db81a7b21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7d373fe9d663ee667142ef0373619ceb18c6fc27bd5823aa75d7f96daec9a142->leave($__internal_7d373fe9d663ee667142ef0373619ceb18c6fc27bd5823aa75d7f96daec9a142_prof);

        
        $__internal_d5ea80240614e13128b2cb32ebc99d302445ea69c5393e88c6b9c5db81a7b21d->leave($__internal_d5ea80240614e13128b2cb32ebc99d302445ea69c5393e88c6b9c5db81a7b21d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
