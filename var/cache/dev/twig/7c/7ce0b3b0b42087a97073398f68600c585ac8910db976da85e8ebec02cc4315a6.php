<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_71e2258809b82f59144b607a6119d81147e704f3709f1db7743aeea9dfd4f254 extends Twig_Template
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
        $__internal_79dd78e65bc04a6fb9e92be563e3a63f45523ad839f800366790e4494ea3ef74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79dd78e65bc04a6fb9e92be563e3a63f45523ad839f800366790e4494ea3ef74->enter($__internal_79dd78e65bc04a6fb9e92be563e3a63f45523ad839f800366790e4494ea3ef74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_f599d083f503b6531cc1d5621d202871d416beedb7dd01c2202e995845d564c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f599d083f503b6531cc1d5621d202871d416beedb7dd01c2202e995845d564c8->enter($__internal_f599d083f503b6531cc1d5621d202871d416beedb7dd01c2202e995845d564c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_79dd78e65bc04a6fb9e92be563e3a63f45523ad839f800366790e4494ea3ef74->leave($__internal_79dd78e65bc04a6fb9e92be563e3a63f45523ad839f800366790e4494ea3ef74_prof);

        
        $__internal_f599d083f503b6531cc1d5621d202871d416beedb7dd01c2202e995845d564c8->leave($__internal_f599d083f503b6531cc1d5621d202871d416beedb7dd01c2202e995845d564c8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
