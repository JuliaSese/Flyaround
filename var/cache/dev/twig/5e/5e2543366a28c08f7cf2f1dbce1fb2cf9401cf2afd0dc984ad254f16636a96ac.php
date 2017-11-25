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
        $__internal_2c712f00be2e5859d2e92ff93477fcb4e0b572a437443322d2094b6a9ceb332c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c712f00be2e5859d2e92ff93477fcb4e0b572a437443322d2094b6a9ceb332c->enter($__internal_2c712f00be2e5859d2e92ff93477fcb4e0b572a437443322d2094b6a9ceb332c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/new.html.twig"));

        $__internal_347c23e1446c552a81117ef7e5b42e5740309b6b1f3cb41d6c308444fbecbdcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347c23e1446c552a81117ef7e5b42e5740309b6b1f3cb41d6c308444fbecbdcf->enter($__internal_347c23e1446c552a81117ef7e5b42e5740309b6b1f3cb41d6c308444fbecbdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c712f00be2e5859d2e92ff93477fcb4e0b572a437443322d2094b6a9ceb332c->leave($__internal_2c712f00be2e5859d2e92ff93477fcb4e0b572a437443322d2094b6a9ceb332c_prof);

        
        $__internal_347c23e1446c552a81117ef7e5b42e5740309b6b1f3cb41d6c308444fbecbdcf->leave($__internal_347c23e1446c552a81117ef7e5b42e5740309b6b1f3cb41d6c308444fbecbdcf_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2d1381e212437cd9697e999e4f8bc54cc538dab7747f48ed2c8d0823c13fb4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2d1381e212437cd9697e999e4f8bc54cc538dab7747f48ed2c8d0823c13fb4a->enter($__internal_b2d1381e212437cd9697e999e4f8bc54cc538dab7747f48ed2c8d0823c13fb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec47d35338ff8ceeb8e453410212d6bf344a8caf06c51b24693ad49f5c039224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec47d35338ff8ceeb8e453410212d6bf344a8caf06c51b24693ad49f5c039224->enter($__internal_ec47d35338ff8ceeb8e453410212d6bf344a8caf06c51b24693ad49f5c039224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>Review new</h1>

";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" value=\"Create\" />
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_ec47d35338ff8ceeb8e453410212d6bf344a8caf06c51b24693ad49f5c039224->leave($__internal_ec47d35338ff8ceeb8e453410212d6bf344a8caf06c51b24693ad49f5c039224_prof);

        
        $__internal_b2d1381e212437cd9697e999e4f8bc54cc538dab7747f48ed2c8d0823c13fb4a->leave($__internal_b2d1381e212437cd9697e999e4f8bc54cc538dab7747f48ed2c8d0823c13fb4a_prof);

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
        return array (  62 => 10,  57 => 8,  53 => 7,  49 => 5,  40 => 4,  11 => 1,);
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

{{ form_start(form) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"Create\" />
{{ form_end(form) }}

{% endblock %}
", "review/new.html.twig", "/var/www/html/flyaround/app/Resources/views/review/new.html.twig");
    }
}
