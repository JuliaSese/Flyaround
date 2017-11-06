<?php

/* planemodel/new.html.twig */
class __TwigTemplate_c2c39e907218ce0d46b57d261c887ab0e97e2a1aa1d30b457732d9e613745c1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "planemodel/new.html.twig", 1);
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
        $__internal_77b7954cdd0595ff9e6a56a1724f2203299c534b63b5cbf2793d0a40d0d5374d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77b7954cdd0595ff9e6a56a1724f2203299c534b63b5cbf2793d0a40d0d5374d->enter($__internal_77b7954cdd0595ff9e6a56a1724f2203299c534b63b5cbf2793d0a40d0d5374d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planemodel/new.html.twig"));

        $__internal_156811fb41fb16b0bf6a1fd22166ebd47f411419a1c994b68ef84bbc953d9b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156811fb41fb16b0bf6a1fd22166ebd47f411419a1c994b68ef84bbc953d9b1c->enter($__internal_156811fb41fb16b0bf6a1fd22166ebd47f411419a1c994b68ef84bbc953d9b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planemodel/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77b7954cdd0595ff9e6a56a1724f2203299c534b63b5cbf2793d0a40d0d5374d->leave($__internal_77b7954cdd0595ff9e6a56a1724f2203299c534b63b5cbf2793d0a40d0d5374d_prof);

        
        $__internal_156811fb41fb16b0bf6a1fd22166ebd47f411419a1c994b68ef84bbc953d9b1c->leave($__internal_156811fb41fb16b0bf6a1fd22166ebd47f411419a1c994b68ef84bbc953d9b1c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5f442e5d5dfd0dd89f35891a099a492e1d0f8a8d9af0a2aa868e30d10f1c74b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5f442e5d5dfd0dd89f35891a099a492e1d0f8a8d9af0a2aa868e30d10f1c74b->enter($__internal_a5f442e5d5dfd0dd89f35891a099a492e1d0f8a8d9af0a2aa868e30d10f1c74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d78f09bb3ddfb2696fd32b0f4faea3d50d54789a1c9728a5389ee0abd22c8ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d78f09bb3ddfb2696fd32b0f4faea3d50d54789a1c9728a5389ee0abd22c8ccf->enter($__internal_d78f09bb3ddfb2696fd32b0f4faea3d50d54789a1c9728a5389ee0abd22c8ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Planemodel creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
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
        
        $__internal_d78f09bb3ddfb2696fd32b0f4faea3d50d54789a1c9728a5389ee0abd22c8ccf->leave($__internal_d78f09bb3ddfb2696fd32b0f4faea3d50d54789a1c9728a5389ee0abd22c8ccf_prof);

        
        $__internal_a5f442e5d5dfd0dd89f35891a099a492e1d0f8a8d9af0a2aa868e30d10f1c74b->leave($__internal_a5f442e5d5dfd0dd89f35891a099a492e1d0f8a8d9af0a2aa868e30d10f1c74b_prof);

    }

    public function getTemplateName()
    {
        return "planemodel/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
", "planemodel/new.html.twig", "/var/www/html/flyaround/app/Resources/views/planemodel/new.html.twig");
    }
}
