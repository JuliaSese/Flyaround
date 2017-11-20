<?php

/* review/new.html.twig */
class __TwigTemplate_81ad724ed85d2188e2f9b15fe0386ee1266549f6a3babd97aba6ca8d9627e62c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "review/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28bf23abd46422e9050e28e4df5af1257ad664fc07be2a02ac0a4dcaeff897ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28bf23abd46422e9050e28e4df5af1257ad664fc07be2a02ac0a4dcaeff897ad->enter($__internal_28bf23abd46422e9050e28e4df5af1257ad664fc07be2a02ac0a4dcaeff897ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/new.html.twig"));

        $__internal_fa6347c8354c7cca2e52feba97482548d8f800af0823387f7c2ecaf476d0a2be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa6347c8354c7cca2e52feba97482548d8f800af0823387f7c2ecaf476d0a2be->enter($__internal_fa6347c8354c7cca2e52feba97482548d8f800af0823387f7c2ecaf476d0a2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28bf23abd46422e9050e28e4df5af1257ad664fc07be2a02ac0a4dcaeff897ad->leave($__internal_28bf23abd46422e9050e28e4df5af1257ad664fc07be2a02ac0a4dcaeff897ad_prof);

        
        $__internal_fa6347c8354c7cca2e52feba97482548d8f800af0823387f7c2ecaf476d0a2be->leave($__internal_fa6347c8354c7cca2e52feba97482548d8f800af0823387f7c2ecaf476d0a2be_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_051af17c642da0b79c52611722fd123001132a16a7db2edd3d4f5d2d6c73ebdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051af17c642da0b79c52611722fd123001132a16a7db2edd3d4f5d2d6c73ebdf->enter($__internal_051af17c642da0b79c52611722fd123001132a16a7db2edd3d4f5d2d6c73ebdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f3432f4f54d77bac2f61059118f1fedae64823bb24e3fa7f61074e2da8b2dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3432f4f54d77bac2f61059118f1fedae64823bb24e3fa7f61074e2da8b2dc8->enter($__internal_6f3432f4f54d77bac2f61059118f1fedae64823bb24e3fa7f61074e2da8b2dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>Review new</h1>
";
        
        $__internal_6f3432f4f54d77bac2f61059118f1fedae64823bb24e3fa7f61074e2da8b2dc8->leave($__internal_6f3432f4f54d77bac2f61059118f1fedae64823bb24e3fa7f61074e2da8b2dc8_prof);

        
        $__internal_051af17c642da0b79c52611722fd123001132a16a7db2edd3d4f5d2d6c73ebdf->leave($__internal_051af17c642da0b79c52611722fd123001132a16a7db2edd3d4f5d2d6c73ebdf_prof);

    }

    public function getTemplateName()
    {
        return "review/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}
<h1>Review new</h1>
{% endblock %}
", "review/new.html.twig", "/var/www/html/flyaround/app/Resources/views/review/new.html.twig");
    }
}
