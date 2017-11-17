<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_56027a76fb0cbc8231a447146ad120952aab48b1e01687a0b6292b9f65aa1dba extends Twig_Template
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
        $__internal_bab3abd010ee1d8eb997957b70018b06668b197f84511e6be7ee4ea0514f0d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bab3abd010ee1d8eb997957b70018b06668b197f84511e6be7ee4ea0514f0d33->enter($__internal_bab3abd010ee1d8eb997957b70018b06668b197f84511e6be7ee4ea0514f0d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_6763d69101a14caa519bdc3b6b7ee2568d5378a3e13bb465c0e22b51aa49feb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6763d69101a14caa519bdc3b6b7ee2568d5378a3e13bb465c0e22b51aa49feb0->enter($__internal_6763d69101a14caa519bdc3b6b7ee2568d5378a3e13bb465c0e22b51aa49feb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_bab3abd010ee1d8eb997957b70018b06668b197f84511e6be7ee4ea0514f0d33->leave($__internal_bab3abd010ee1d8eb997957b70018b06668b197f84511e6be7ee4ea0514f0d33_prof);

        
        $__internal_6763d69101a14caa519bdc3b6b7ee2568d5378a3e13bb465c0e22b51aa49feb0->leave($__internal_6763d69101a14caa519bdc3b6b7ee2568d5378a3e13bb465c0e22b51aa49feb0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
