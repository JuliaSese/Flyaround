<?php

/* :review:new.html.twig */
class __TwigTemplate_81ad724ed85d2188e2f9b15fe0386ee1266549f6a3babd97aba6ca8d9627e62c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":review:new.html.twig", 1);
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
        $__internal_5517956b3100f1edc2f192727acd49bfda59956292d788371464b283ea14528f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5517956b3100f1edc2f192727acd49bfda59956292d788371464b283ea14528f->enter($__internal_5517956b3100f1edc2f192727acd49bfda59956292d788371464b283ea14528f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":review:new.html.twig"));

        $__internal_c1cd6a6eaae1ddeeb73c53fe698c8b983cd60522628c52be64e4d9840c7d3cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1cd6a6eaae1ddeeb73c53fe698c8b983cd60522628c52be64e4d9840c7d3cd3->enter($__internal_c1cd6a6eaae1ddeeb73c53fe698c8b983cd60522628c52be64e4d9840c7d3cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":review:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5517956b3100f1edc2f192727acd49bfda59956292d788371464b283ea14528f->leave($__internal_5517956b3100f1edc2f192727acd49bfda59956292d788371464b283ea14528f_prof);

        
        $__internal_c1cd6a6eaae1ddeeb73c53fe698c8b983cd60522628c52be64e4d9840c7d3cd3->leave($__internal_c1cd6a6eaae1ddeeb73c53fe698c8b983cd60522628c52be64e4d9840c7d3cd3_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c733381aace8391c6ff1d663dabf32ff860d09fd74d38de37285f6be17b0d58f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c733381aace8391c6ff1d663dabf32ff860d09fd74d38de37285f6be17b0d58f->enter($__internal_c733381aace8391c6ff1d663dabf32ff860d09fd74d38de37285f6be17b0d58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5741401e84642086bcad45b9e958358d5ec003064172660d525a8b45b3890840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5741401e84642086bcad45b9e958358d5ec003064172660d525a8b45b3890840->enter($__internal_5741401e84642086bcad45b9e958358d5ec003064172660d525a8b45b3890840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5741401e84642086bcad45b9e958358d5ec003064172660d525a8b45b3890840->leave($__internal_5741401e84642086bcad45b9e958358d5ec003064172660d525a8b45b3890840_prof);

        
        $__internal_c733381aace8391c6ff1d663dabf32ff860d09fd74d38de37285f6be17b0d58f->leave($__internal_c733381aace8391c6ff1d663dabf32ff860d09fd74d38de37285f6be17b0d58f_prof);

    }

    public function getTemplateName()
    {
        return ":review:new.html.twig";
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
", ":review:new.html.twig", "/var/www/html/flyaround/app/Resources/views/review/new.html.twig");
    }
}
