<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_111af36d9aaec26d61ccec7aa26665d80a6153838da23d07aeb676e957a90213 extends Twig_Template
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
        $__internal_3e4815bd3116006a0d047f4071005e7895d04545099ba5ea1a3d129cf81d071a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e4815bd3116006a0d047f4071005e7895d04545099ba5ea1a3d129cf81d071a->enter($__internal_3e4815bd3116006a0d047f4071005e7895d04545099ba5ea1a3d129cf81d071a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_5e8c53b3b12dbc16b5b36975a3b84f198a1429db63de441d9d6b6697f301db6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8c53b3b12dbc16b5b36975a3b84f198a1429db63de441d9d6b6697f301db6d->enter($__internal_5e8c53b3b12dbc16b5b36975a3b84f198a1429db63de441d9d6b6697f301db6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3e4815bd3116006a0d047f4071005e7895d04545099ba5ea1a3d129cf81d071a->leave($__internal_3e4815bd3116006a0d047f4071005e7895d04545099ba5ea1a3d129cf81d071a_prof);

        
        $__internal_5e8c53b3b12dbc16b5b36975a3b84f198a1429db63de441d9d6b6697f301db6d->leave($__internal_5e8c53b3b12dbc16b5b36975a3b84f198a1429db63de441d9d6b6697f301db6d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
