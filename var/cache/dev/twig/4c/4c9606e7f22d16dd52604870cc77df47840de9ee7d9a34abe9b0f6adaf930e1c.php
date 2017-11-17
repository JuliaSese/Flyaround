<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_fb031c3f53f3180a846c3af6d0ddc9bc93284d039028c01b5e95b74a76957808 extends Twig_Template
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
        $__internal_8cc1c484d310803835ce2ba304d6bd7cc5a59a2432f9d1bcac35458aca4ea021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc1c484d310803835ce2ba304d6bd7cc5a59a2432f9d1bcac35458aca4ea021->enter($__internal_8cc1c484d310803835ce2ba304d6bd7cc5a59a2432f9d1bcac35458aca4ea021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_c1e0d5f99b1361c61c96b328ec0703d756de7cc44828228952950dbc5ff40128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e0d5f99b1361c61c96b328ec0703d756de7cc44828228952950dbc5ff40128->enter($__internal_c1e0d5f99b1361c61c96b328ec0703d756de7cc44828228952950dbc5ff40128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_8cc1c484d310803835ce2ba304d6bd7cc5a59a2432f9d1bcac35458aca4ea021->leave($__internal_8cc1c484d310803835ce2ba304d6bd7cc5a59a2432f9d1bcac35458aca4ea021_prof);

        
        $__internal_c1e0d5f99b1361c61c96b328ec0703d756de7cc44828228952950dbc5ff40128->leave($__internal_c1e0d5f99b1361c61c96b328ec0703d756de7cc44828228952950dbc5ff40128_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
