<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f67d2fc2f7a2285ee9e986e046017b1d8e54b71d0756e0ffdddbf5be77ea14a4 extends Twig_Template
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
        $__internal_462ba00f6f904c20063ef3dad1c57c62fdac335bc90ae3c86a53cf409e2f70f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_462ba00f6f904c20063ef3dad1c57c62fdac335bc90ae3c86a53cf409e2f70f2->enter($__internal_462ba00f6f904c20063ef3dad1c57c62fdac335bc90ae3c86a53cf409e2f70f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_1edcb3172df40e9bf83a777b5a10bd8d8d8323427561f48ba04f0f5d85a25518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1edcb3172df40e9bf83a777b5a10bd8d8d8323427561f48ba04f0f5d85a25518->enter($__internal_1edcb3172df40e9bf83a777b5a10bd8d8d8323427561f48ba04f0f5d85a25518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_462ba00f6f904c20063ef3dad1c57c62fdac335bc90ae3c86a53cf409e2f70f2->leave($__internal_462ba00f6f904c20063ef3dad1c57c62fdac335bc90ae3c86a53cf409e2f70f2_prof);

        
        $__internal_1edcb3172df40e9bf83a777b5a10bd8d8d8323427561f48ba04f0f5d85a25518->leave($__internal_1edcb3172df40e9bf83a777b5a10bd8d8d8323427561f48ba04f0f5d85a25518_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
