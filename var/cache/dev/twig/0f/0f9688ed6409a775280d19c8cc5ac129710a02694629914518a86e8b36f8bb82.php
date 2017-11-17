<?php

/* :planemodel:new.html.twig */
class __TwigTemplate_22ddac317a4ce63c3419b34e3e9043fc34009e2564fcea61ab054b07b6574837 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":planemodel:new.html.twig", 1);
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
        $__internal_3b77689ee1ed5139f4a0d11a8516b72c50b97171b1e0ff5aed29342fc68b4ffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b77689ee1ed5139f4a0d11a8516b72c50b97171b1e0ff5aed29342fc68b4ffc->enter($__internal_3b77689ee1ed5139f4a0d11a8516b72c50b97171b1e0ff5aed29342fc68b4ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":planemodel:new.html.twig"));

        $__internal_89df9e8faa4642786124d4e437c118101e9941ebc7aba955ffd26522d7cda0a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89df9e8faa4642786124d4e437c118101e9941ebc7aba955ffd26522d7cda0a2->enter($__internal_89df9e8faa4642786124d4e437c118101e9941ebc7aba955ffd26522d7cda0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":planemodel:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b77689ee1ed5139f4a0d11a8516b72c50b97171b1e0ff5aed29342fc68b4ffc->leave($__internal_3b77689ee1ed5139f4a0d11a8516b72c50b97171b1e0ff5aed29342fc68b4ffc_prof);

        
        $__internal_89df9e8faa4642786124d4e437c118101e9941ebc7aba955ffd26522d7cda0a2->leave($__internal_89df9e8faa4642786124d4e437c118101e9941ebc7aba955ffd26522d7cda0a2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf864bab059e43932ffc2495da65a211c05aa3aa0718b1da93ed4009199d9175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf864bab059e43932ffc2495da65a211c05aa3aa0718b1da93ed4009199d9175->enter($__internal_cf864bab059e43932ffc2495da65a211c05aa3aa0718b1da93ed4009199d9175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6c5c966052372bce1681367222faaa1b6994c1a44020d0006da01bb94afc7a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5c966052372bce1681367222faaa1b6994c1a44020d0006da01bb94afc7a79->enter($__internal_6c5c966052372bce1681367222faaa1b6994c1a44020d0006da01bb94afc7a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Planemodel creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6c5c966052372bce1681367222faaa1b6994c1a44020d0006da01bb94afc7a79->leave($__internal_6c5c966052372bce1681367222faaa1b6994c1a44020d0006da01bb94afc7a79_prof);

        
        $__internal_cf864bab059e43932ffc2495da65a211c05aa3aa0718b1da93ed4009199d9175->leave($__internal_cf864bab059e43932ffc2495da65a211c05aa3aa0718b1da93ed4009199d9175_prof);

    }

    public function getTemplateName()
    {
        return ":planemodel:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Planemodel creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('planemodel_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":planemodel:new.html.twig", "/var/www/html/flyaround/app/Resources/views/planemodel/new.html.twig");
    }
}
