<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_43a8ba4919bebbb89148111448a42654498087b1a3f19e4b9e32078af410d70c extends Twig_Template
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
        $__internal_2a1ab31184691a25f742c91afdb83fad6f33d74c63df4bfcf5569402b8225cbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a1ab31184691a25f742c91afdb83fad6f33d74c63df4bfcf5569402b8225cbe->enter($__internal_2a1ab31184691a25f742c91afdb83fad6f33d74c63df4bfcf5569402b8225cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_92ffafdc87c0861dc1b319db89f6b90f9558ddcc229bc2eafb958134e977843a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ffafdc87c0861dc1b319db89f6b90f9558ddcc229bc2eafb958134e977843a->enter($__internal_92ffafdc87c0861dc1b319db89f6b90f9558ddcc229bc2eafb958134e977843a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_2a1ab31184691a25f742c91afdb83fad6f33d74c63df4bfcf5569402b8225cbe->leave($__internal_2a1ab31184691a25f742c91afdb83fad6f33d74c63df4bfcf5569402b8225cbe_prof);

        
        $__internal_92ffafdc87c0861dc1b319db89f6b90f9558ddcc229bc2eafb958134e977843a->leave($__internal_92ffafdc87c0861dc1b319db89f6b90f9558ddcc229bc2eafb958134e977843a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
